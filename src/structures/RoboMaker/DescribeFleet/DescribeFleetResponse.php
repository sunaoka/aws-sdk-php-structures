<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property string $arn
 * @property list<Shapes\Robot> $robots
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled' $lastDeploymentStatus
 * @property string $lastDeploymentJob
 * @property \Aws\Api\DateTimeResult $lastDeploymentTime
 * @property array<string, string> $tags
 */
class DescribeFleetResponse extends Response
{
}
