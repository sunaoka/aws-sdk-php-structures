<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeRobot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $fleetArn
 * @property 'Available'|'Registered'|'PendingNewDeployment'|'Deploying'|'Failed'|'InSync'|'NoResponse' $status
 * @property string $greengrassGroupId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'X86_64'|'ARM64'|'ARMHF' $architecture
 * @property string $lastDeploymentJob
 * @property \Aws\Api\DateTimeResult $lastDeploymentTime
 * @property array<string, string> $tags
 */
class DescribeRobotResponse extends Response
{
}
