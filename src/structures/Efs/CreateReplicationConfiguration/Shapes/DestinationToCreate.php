<?php

namespace Sunaoka\Aws\Structures\Efs\CreateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string $AvailabilityZoneName
 * @property string $KmsKeyId
 * @property string $FileSystemId
 * @property string $RoleArn
 */
class DestinationToCreate extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     AvailabilityZoneName?: string,
     *     KmsKeyId?: string,
     *     FileSystemId?: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
