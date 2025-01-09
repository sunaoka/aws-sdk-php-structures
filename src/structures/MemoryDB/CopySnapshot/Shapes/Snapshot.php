<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CopySnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Status
 * @property string $Source
 * @property string $KmsKeyId
 * @property string $ARN
 * @property ClusterConfiguration $ClusterConfiguration
 * @property 'true'|'false' $DataTiering
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Status?: string,
     *     Source?: string,
     *     KmsKeyId?: string,
     *     ARN?: string,
     *     ClusterConfiguration?: ClusterConfiguration,
     *     DataTiering?: 'true'|'false'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
