<?php

namespace Sunaoka\Aws\Structures\Efs\CreateReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $AvailabilityZoneName
 * @property string|null $KmsKeyId
 * @property string|null $FileSystemId
 */
class DestinationToCreate extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     AvailabilityZoneName?: string|null,
     *     KmsKeyId?: string|null,
     *     FileSystemId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
