<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeRobotApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $version
 * @property list<Shapes\Source>|null $sources
 * @property Shapes\RobotSoftwareSuite|null $robotSoftwareSuite
 * @property string|null $revisionId
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property array<string, string>|null $tags
 * @property Shapes\Environment|null $environment
 * @property string|null $imageDigest
 */
class DescribeRobotApplicationResponse extends Response
{
}
