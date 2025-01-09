<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property list<Shapes\Source> $sources
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $revisionId
 * @property array<string, string> $tags
 * @property Shapes\Environment $environment
 */
class CreateRobotApplicationResponse extends Response
{
}
