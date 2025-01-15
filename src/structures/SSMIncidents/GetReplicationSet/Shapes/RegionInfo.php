<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetReplicationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sseKmsKeyId
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED' $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult $statusUpdateDateTime
 */
class RegionInfo extends Shape
{
    /**
     * @param array{
     *     sseKmsKeyId?: string|null,
     *     status: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED',
     *     statusMessage?: string|null,
     *     statusUpdateDateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
