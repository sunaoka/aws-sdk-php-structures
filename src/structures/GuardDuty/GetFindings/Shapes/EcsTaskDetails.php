<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $DefinitionArn
 * @property string $Version
 * @property \Aws\Api\DateTimeResult $TaskCreatedAt
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property string $StartedBy
 * @property list<Tag> $Tags
 * @property list<Volume> $Volumes
 * @property list<Container> $Containers
 * @property string $Group
 * @property string $LaunchType
 */
class EcsTaskDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     DefinitionArn?: string,
     *     Version?: string,
     *     TaskCreatedAt?: \Aws\Api\DateTimeResult,
     *     StartedAt?: \Aws\Api\DateTimeResult,
     *     StartedBy?: string,
     *     Tags?: list<Tag>,
     *     Volumes?: list<Volume>,
     *     Containers?: list<Container>,
     *     Group?: string,
     *     LaunchType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
