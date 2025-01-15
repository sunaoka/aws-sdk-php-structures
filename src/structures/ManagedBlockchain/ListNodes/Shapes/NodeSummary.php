<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property string|null $AvailabilityZone
 * @property string|null $InstanceType
 * @property string|null $Arn
 */
class NodeSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Status?: 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY'|null,
     *     CreationDate?: \Aws\Api\DateTimeResult|null,
     *     AvailabilityZone?: string|null,
     *     InstanceType?: string|null,
     *     Arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
