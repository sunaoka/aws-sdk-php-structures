<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property list<Shapes\Source> $sources
 * @property Shapes\SimulationSoftwareSuite $simulationSoftwareSuite
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property Shapes\RenderingEngine $renderingEngine
 * @property string $revisionId
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property array<string, string> $tags
 * @property Shapes\Environment $environment
 * @property string $imageDigest
 */
class DescribeSimulationApplicationResponse extends Response
{
}
