<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeRobot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $fleetArn
 * @property 'Available'|'Registered'|'PendingNewDeployment'|'Deploying'|'Failed'|'InSync'|'NoResponse'|null $status
 * @property string|null $greengrassGroupId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'X86_64'|'ARM64'|'ARMHF'|null $architecture
 * @property string|null $lastDeploymentJob
 * @property \Aws\Api\DateTimeResult|null $lastDeploymentTime
 * @property array<string, string>|null $tags
 */
class DescribeRobotResponse extends Response
{
}
