<?php
namespace Team;
/**
 *
 */
class BaseballTeam
{
    /**
     * @var string
     */
     public string $name;

    /**
     * Constructor
     */
    private function __construct( )
    {

    }
    /**
     * Static Factory
     */
    public static function create(string $name): BaseballTeam
    {
        $instance = new self();
        $instance->setName($name);
        return $instance;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return  $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}