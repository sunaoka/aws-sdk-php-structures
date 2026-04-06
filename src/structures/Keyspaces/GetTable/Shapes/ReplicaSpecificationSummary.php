<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $region
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'RESTORING'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|null $status
 * @property CapacitySpecificationSummary|null $capacitySpecification
 */
class ReplicaSpecificationSummary extends Shape
{
    /**
     * @param array{
     *     region?: string|null,
     *     status?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'DELETED'|'RESTORING'|'INACCESSIBLE_ENCRYPTION_CREDENTIALS'|null,
     *     capacitySpecification?: CapacitySpecificationSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
