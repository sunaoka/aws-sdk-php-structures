<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\SourceConfig>|null $sources
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property array<string, string>|null $tags
 * @property Shapes\Environment|null $environment
 */
class CreateRobotApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     sources?: list<Shapes\SourceConfig>|null,
     *     robotSoftwareSuite: Shapes\RobotSoftwareSuite,
     *     tags?: array<string, string>|null,
     *     environment?: Shapes\Environment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
