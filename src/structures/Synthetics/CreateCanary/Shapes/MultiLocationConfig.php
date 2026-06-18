<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Primary'|'Replica'|null $LocationType
 * @property string|null $PrimaryLocation
 * @property list<Replica>|null $Replicas
 * @property 'InProgress'|'InSync'|'Inconsistent'|null $ReplicationState
 */
class MultiLocationConfig extends Shape
{
    /**
     * @param array{
     *     LocationType?: 'Primary'|'Replica'|null,
     *     PrimaryLocation?: string|null,
     *     Replicas?: list<Replica>|null,
     *     ReplicationState?: 'InProgress'|'InSync'|'Inconsistent'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
