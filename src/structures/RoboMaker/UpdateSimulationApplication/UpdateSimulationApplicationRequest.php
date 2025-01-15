<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateSimulationApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property list<Shapes\SourceConfig>|null $sources
 * @property Shapes\SimulationSoftwareSuite $simulationSoftwareSuite
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property Shapes\RenderingEngine|null $renderingEngine
 * @property string|null $currentRevisionId
 * @property Shapes\Environment|null $environment
 */
class UpdateSimulationApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     sources?: list<Shapes\SourceConfig>|null,
     *     simulationSoftwareSuite: Shapes\SimulationSoftwareSuite,
     *     robotSoftwareSuite: Shapes\RobotSoftwareSuite,
     *     renderingEngine?: Shapes\RenderingEngine|null,
     *     currentRevisionId?: string|null,
     *     environment?: Shapes\Environment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
