<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeFleet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property list<Shapes\Robot>|null $robots
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'Pending'|'Preparing'|'InProgress'|'Failed'|'Succeeded'|'Canceled'|null $lastDeploymentStatus
 * @property string|null $lastDeploymentJob
 * @property \Aws\Api\DateTimeResult|null $lastDeploymentTime
 * @property array<string, string>|null $tags
 */
class DescribeFleetResponse extends Response
{
}
