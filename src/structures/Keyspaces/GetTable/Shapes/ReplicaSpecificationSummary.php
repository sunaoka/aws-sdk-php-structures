<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'RESTORING'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS' $status
 * @property CapacitySpecificationSummary $capacitySpecification
 */
class ReplicaSpecificationSummary extends Shape
{
    /**
     * @param array{
     *     region?: string,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'RESTORING'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS',
     *     capacitySpecification?: CapacitySpecificationSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
