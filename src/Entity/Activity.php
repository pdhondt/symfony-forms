<?php

namespace App\Entity;

use App\Repository\ActivityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActivityRepository::class)
 */
class Activity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $distance;

    /**
     * @ORM\Column(type="float")
     */
    private $total_elevation_gain;

    /**
     * @ORM\Column(type="integer")
     */
    private $activity_id;

    /**
     * @ORM\Column(type="date")
     */
    private $start_date_local;

    /**
     * @ORM\Column(type="float")
     */
    private $average_speed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getTotalElevationGain(): ?float
    {
        return $this->total_elevation_gain;
    }

    public function setTotalElevationGain(float $total_elevation_gain): self
    {
        $this->total_elevation_gain = $total_elevation_gain;

        return $this;
    }

    public function getActivityId(): ?int
    {
        return $this->activity_id;
    }

    public function setActivityId(int $activity_id): self
    {
        $this->activity_id = $activity_id;

        return $this;
    }

    public function getStartDateLocal(): ?\DateTimeInterface
    {
        return $this->start_date_local;
    }

    public function setStartDateLocal(\DateTimeInterface $start_date_local): self
    {
        $this->start_date_local = $start_date_local;

        return $this;
    }

    public function getAverageSpeed(): ?float
    {
        return $this->average_speed;
    }

    public function setAverageSpeed(float $average_speed): self
    {
        $this->average_speed = $average_speed;

        return $this;
    }
}
