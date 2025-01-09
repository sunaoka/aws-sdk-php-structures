<?php

namespace Sunaoka\Aws\Structures\RoboMaker\UpdateSimulationApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $application
 * @property list<Shapes\SourceConfig> $sources
 * @property Shapes\SimulationSoftwareSuite $simulationSoftwareSuite
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property Shapes\RenderingEngine $renderingEngine
 * @property string $currentRevisionId
 * @property Shapes\Environment $environment
 */
class UpdateSimulationApplicationRequest extends Request
{
    /**
     * @param array{
     *     application: string,
     *     sources?: list<Shapes\SourceConfig>,
     *     simulationSoftwareSuite: Shapes\SimulationSoftwareSuite,
     *     robotSoftwareSuite: Shapes\RobotSoftwareSuite,
     *     renderingEngine?: Shapes\RenderingEngine,
     *     currentRevisionId?: string,
     *     environment?: Shapes\Environment
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
