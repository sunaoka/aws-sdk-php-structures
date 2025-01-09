<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateRobotApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property list<Shapes\SourceConfig> $sources
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property string $currentRevisionId
 * @property Shapes\Environment $environment
 */
class UpdateRobotApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     sources?: list<Shapes\SourceConfig>,
     *     robotSoftwareSuite: Shapes\RobotSoftwareSuite,
     *     currentRevisionId?: string,
     *     environment?: Shapes\Environment
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
