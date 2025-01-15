<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateRobotApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property list<Shapes\SourceConfig>|null $sources
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property string|null $currentRevisionId
 * @property Shapes\Environment|null $environment
 */
class UpdateRobotApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     sources?: list<Shapes\SourceConfig>|null,
     *     robotSoftwareSuite: Shapes\RobotSoftwareSuite,
     *     currentRevisionId?: string|null,
     *     environment?: Shapes\Environment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
