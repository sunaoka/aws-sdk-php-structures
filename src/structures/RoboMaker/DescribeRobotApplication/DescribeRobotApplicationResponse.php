<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeRobotApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $version
 * @property list<Shapes\Source> $sources
 * @property Shapes\RobotSoftwareSuite $robotSoftwareSuite
 * @property string $revisionId
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property array<string, string> $tags
 * @property Shapes\Environment $environment
 * @property string $imageDigest
 */
class DescribeRobotApplicationResponse extends Response
{
}
