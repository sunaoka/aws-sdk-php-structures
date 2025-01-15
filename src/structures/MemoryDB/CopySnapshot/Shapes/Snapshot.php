<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CopySnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Status
 * @property string|null $Source
 * @property string|null $KmsKeyId
 * @property string|null $ARN
 * @property ClusterConfiguration|null $ClusterConfiguration
 * @property 'true'|'false'|null $DataTiering
 */
class Snapshot extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Status?: string|null,
     *     Source?: string|null,
     *     KmsKeyId?: string|null,
     *     ARN?: string|null,
     *     ClusterConfiguration?: ClusterConfiguration|null,
     *     DataTiering?: 'true'|'false'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
