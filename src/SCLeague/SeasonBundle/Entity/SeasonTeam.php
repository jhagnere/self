<?php

namespace SCLeague\SeasonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use SCLeague\TeamBundle\Entity\Team;

/**
 * SeasonTeam
 *
 * @ORM\Table(uniqueConstraints={@ORM\UniqueConstraint(name="season_team_unique", columns={"seasonId", "teamId"})}))
 * @ORM\Entity(repositoryClass="SCLeague\SeasonBundle\Entity\SeasonTeamRepository")
 */
class SeasonTeam
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
    * @var integer
    *
    * @ORM\ManyToOne(targetEntity="SCLeague\SeasonBundle\Entity\Season")
    * @ORM\JoinColumn(name="seasonId", referencedColumnName="id")
    **/
    private $season;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="SCLeague\SeasonBundle\Entity\Division")
     * @ORM\JoinColumn(name="divisionId", referencedColumnName="id")
     **/
    private $division;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="SCLeague\TeamBundle\Entity\Team")
     * @ORM\JoinColumn(name="teamId", referencedColumnName="id")
     **/
    private $team;

    /**
     * @var integer
     *
     * @ORM\Column(name="ranking", type="integer")
     */
    private $ranking;

    /**
     * @return Team
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param Team $team
     */
    public function setTeam($team)
    {
        $this->team = $team;
    }




    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set ranking
     *
     * @param integer $ranking
     * @return SeasonTeam
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;

        return $this;
    }

    /**
     * Get ranking
     *
     * @return integer
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * @return Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param Season $season
     */
    public function setSeason($season)
    {
        $this->season = $season;
    }

    /**
     * @return Division
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @param Division $division
     */
    public function setDivision($division)
    {
        $this->division = $division;
    }


}
