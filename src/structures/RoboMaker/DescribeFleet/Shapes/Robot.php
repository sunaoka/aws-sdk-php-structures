<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $fleetArn
 * @property 'Available'|'Registered'|'PendingNewDeployment'|'Deploying'|'Failed'|'InSync'|'NoResponse' $status
 * @property string $greenGrassGroupId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'X86_64'|'ARM64'|'ARMHF' $architecture
 * @property string $lastDeploymentJob
 * @property \Aws\Api\DateTimeResult $lastDeploymentTime
 */
class Robot extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     fleetArn?: string,
     *     status?: 'Available'|'Registered'|'PendingNewDeployment'|'Deploying'|'Failed'|'InSync'|'NoResponse',
     *     greenGrassGroupId?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     architecture?: 'X86_64'|'ARM64'|'ARMHF',
     *     lastDeploymentJob?: string,
     *     lastDeploymentTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
