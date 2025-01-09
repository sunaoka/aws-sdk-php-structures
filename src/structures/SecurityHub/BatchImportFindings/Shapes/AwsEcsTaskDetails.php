<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterArn
 * @property string $TaskDefinitionArn
 * @property string $Version
 * @property string $CreatedAt
 * @property string $StartedAt
 * @property string $StartedBy
 * @property string $Group
 * @property list<AwsEcsTaskVolumeDetails> $Volumes
 * @property list<AwsEcsContainerDetails> $Containers
 */
class AwsEcsTaskDetails extends Shape
{
    /**
     * @param array{
     *     ClusterArn?: string,
     *     TaskDefinitionArn?: string,
     *     Version?: string,
     *     CreatedAt?: string,
     *     StartedAt?: string,
     *     StartedBy?: string,
     *     Group?: string,
     *     Volumes?: list<AwsEcsTaskVolumeDetails>,
     *     Containers?: list<AwsEcsContainerDetails>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
