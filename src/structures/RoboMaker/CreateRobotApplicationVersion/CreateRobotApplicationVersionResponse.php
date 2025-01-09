<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplicationVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property list<Shapes\Source> $sources
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $revisionId
 * @property Shapes\Environment $environment
 */
class CreateRobotApplicationVersionResponse extends Response
{
}
