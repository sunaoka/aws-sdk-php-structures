<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property list<Shapes\Source> $sources
 * @property Shapes\SimulationSoftwareSuite $simulationSoftwareSuite
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property Shapes\RenderingEngine $renderingEngine
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $revisionId
 * @property array<string, string> $tags
 * @property Shapes\Environment $environment
 */
class CreateSimulationApplicationResponse extends Response
{
}
