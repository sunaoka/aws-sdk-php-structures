<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\SourceConfig>|null $sources
 * @property Shapes\SimulationSoftwareSuite $simulationSoftwareSuite
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property Shapes\RenderingEngine|null $renderingEngine
 * @property array<string, string>|null $tags
 * @property Shapes\Environment|null $environment
 */
class CreateSimulationApplicationRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     sources?: list<Shapes\SourceConfig>|null,
     *     simulationSoftwareSuite: Shapes\SimulationSoftwareSuite,
     *     robotSoftwareSuite: Shapes\RobotSoftwareSuite,
     *     renderingEngine?: Shapes\RenderingEngine|null,
     *     tags?: array<string, string>|null,
     *     environment?: Shapes\Environment|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
