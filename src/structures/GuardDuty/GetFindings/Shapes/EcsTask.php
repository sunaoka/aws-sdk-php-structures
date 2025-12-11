<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $TaskDefinitionArn
 * @property 'FARGATE'|'EC2'|null $LaunchType
 * @property list<string>|null $ContainerUids
 */
class EcsTask extends Shape
{
    /**
     * @param array{
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     TaskDefinitionArn?: string|null,
     *     LaunchType?: 'FARGATE'|'EC2'|null,
     *     ContainerUids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
