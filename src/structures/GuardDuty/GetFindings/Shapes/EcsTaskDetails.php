<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $DefinitionArn
 * @property string|null $Version
 * @property \Aws\Api\DateTimeResult|null $TaskCreatedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property string|null $StartedBy
 * @property list<Tag>|null $Tags
 * @property list<Volume>|null $Volumes
 * @property list<Container>|null $Containers
 * @property string|null $Group
 * @property string|null $LaunchType
 */
class EcsTaskDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     DefinitionArn?: string|null,
     *     Version?: string|null,
     *     TaskCreatedAt?: \Aws\Api\DateTimeResult|null,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     StartedBy?: string|null,
     *     Tags?: list<Tag>|null,
     *     Volumes?: list<Volume>|null,
     *     Containers?: list<Container>|null,
     *     Group?: string|null,
     *     LaunchType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
