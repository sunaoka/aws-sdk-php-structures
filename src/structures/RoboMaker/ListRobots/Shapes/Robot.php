<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListRobots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $fleetArn
 * @property 'Available'|'Registered'|'PendingNewDeployment'|'Deploying'|'Failed'|'InSync'|'NoResponse'|null $status
 * @property string|null $greenGrassGroupId
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property 'X86_64'|'ARM64'|'ARMHF'|null $architecture
 * @property string|null $lastDeploymentJob
 * @property \Aws\Api\DateTimeResult|null $lastDeploymentTime
 */
class Robot extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     fleetArn?: string|null,
     *     status?: 'Available'|'Registered'|'PendingNewDeployment'|'Deploying'|'Failed'|'InSync'|'NoResponse'|null,
     *     greenGrassGroupId?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     architecture?: 'X86_64'|'ARM64'|'ARMHF'|null,
     *     lastDeploymentJob?: string|null,
     *     lastDeploymentTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
