<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\SourceConfig> $sources
 * @property Shapes\SimulationSoftwareSuite $simulationSoftwareSuite
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property Shapes\RenderingEngine $renderingEngine
 * @property array<string, string> $tags
 * @property Shapes\Environment $environment
 */
class CreateSimulationApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     sources?: list<Shapes\SourceConfig>,
     *     simulationSoftwareSuite: Shapes\SimulationSoftwareSuite,
     *     robotSoftwareSuite: Shapes\RobotSoftwareSuite,
     *     renderingEngine?: Shapes\RenderingEngine,
     *     tags?: array<string, string>,
     *     environment?: Shapes\Environment
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
