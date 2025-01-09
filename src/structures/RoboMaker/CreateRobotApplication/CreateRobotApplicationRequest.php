<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\SourceConfig> $sources
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property array<string, string> $tags
 * @property Shapes\Environment $environment
 */
class CreateRobotApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     sources?: list<Shapes\SourceConfig>,
     *     robotSoftwareSuite: Shapes\RobotSoftwareSuite,
     *     tags?: array<string, string>,
     *     environment?: Shapes\Environment
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
