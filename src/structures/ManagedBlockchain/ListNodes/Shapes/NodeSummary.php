<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY' $Status
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property string $AvailabilityZone
 * @property string $InstanceType
 * @property string $Arn
 */
class NodeSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Status?: 'CREATING'|'AVAILABLE'|'UNHEALTHY'|'CREATE_FAILED'|'UPDATING'|'DELETING'|'DELETED'|'FAILED'|'INACCESSIBLE_ENCRYPTION_KEY',
     *     CreationDate?: \Aws\Api\DateTimeResult,
     *     AvailabilityZone?: string,
     *     InstanceType?: string,
     *     Arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
