<?php

namespace App\Entity;

use App\Repository\AnnounceRepository;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\Traits\Timestampable;

/**
 * @ORM\Entity(repositoryClass=AnnounceRepository::class)
 * 
 * @ORM\HasLifecycleCallbacks
 */
class Announce
{
    use Timestampable;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $hair_color;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $weight;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $smoking;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alcool;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_children;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $religion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $study_level;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $characters;

    /**
     * @ORM\ManyToOne(targetEntity=Proffesion::class, inversedBy="announces")
     */
    private $proffesion;

    /**
     * @ORM\ManyToOne(targetEntity=Sport::class, inversedBy="announces")
     */
    private $sports;

    /**
     * @ORM\ManyToOne(targetEntity=Hobbies::class, inversedBy="announces")
     */
    private $hobbies;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $birthday;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getHairColor(): ?string
    {
        return $this->hair_color;
    }

    public function setHairColor(?string $hair_color): self
    {
        $this->hair_color = $hair_color;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getSmoking(): ?string
    {
        return $this->smoking;
    }

    public function setSmoking(?string $smoking): self
    {
        $this->smoking = $smoking;

        return $this;
    }

    public function getAlcool(): ?string
    {
        return $this->alcool;
    }

    public function setAlcool(?string $alcool): self
    {
        $this->alcool = $alcool;

        return $this;
    }

    public function getNumberChildren(): ?int
    {
        return $this->number_children;
    }

    public function setNumberChildren(?int $number_children): self
    {
        $this->number_children = $number_children;

        return $this;
    }

    public function getReligion(): ?string
    {
        return $this->religion;
    }

    public function setReligion(?string $religion): self
    {
        $this->religion = $religion;

        return $this;
    }

    public function getStudyLevel(): ?string
    {
        return $this->study_level;
    }

    public function setStudyLevel(?string $study_level): self
    {
        $this->study_level = $study_level;

        return $this;
    }

    public function getCharacters(): ?string
    {
        return $this->characters;
    }

    public function setCharacters(?string $characters): self
    {
        $this->characters = $characters;

        return $this;
    }

    public function getProffesion(): ?Proffesion
    {
        return $this->proffesion;
    }

    public function setProffesion(?Proffesion $proffesion): self
    {
        $this->proffesion = $proffesion;

        return $this;
    }

    public function getSports(): ?Sport
    {
        return $this->sports;
    }

    public function setSports(?Sport $sports): self
    {
        $this->sports = $sports;

        return $this;
    }

    public function getHobbies(): ?Hobbies
    {
        return $this->hobbies;
    }

    public function setHobbies(?Hobbies $hobbies): self
    {
        $this->hobbies = $hobbies;

        return $this;
    }

    public function getBirthday(): ?\DateTimeInterface
    {
        return $this->birthday;
    }

    public function setBirthday(?\DateTimeInterface $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }
}
