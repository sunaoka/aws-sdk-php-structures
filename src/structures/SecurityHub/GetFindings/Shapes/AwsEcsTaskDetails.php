<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterArn
 * @property string|null $TaskDefinitionArn
 * @property string|null $Version
 * @property string|null $CreatedAt
 * @property string|null $StartedAt
 * @property string|null $StartedBy
 * @property string|null $Group
 * @property list<AwsEcsTaskVolumeDetails>|null $Volumes
 * @property list<AwsEcsContainerDetails>|null $Containers
 */
class AwsEcsTaskDetails extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string|null,
     *     TaskDefinitionArn?: string|null,
     *     Version?: string|null,
     *     CreatedAt?: string|null,
     *     StartedAt?: string|null,
     *     StartedBy?: string|null,
     *     Group?: string|null,
     *     Volumes?: list<AwsEcsTaskVolumeDetails>|null,
     *     Containers?: list<AwsEcsContainerDetails>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
