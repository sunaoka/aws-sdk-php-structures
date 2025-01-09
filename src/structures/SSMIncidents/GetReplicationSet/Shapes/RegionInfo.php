<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetReplicationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sseKmsKeyId
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $statusUpdateDateTime
 */
class RegionInfo extends Shape
{
    /**
     * @param array{
     *     sseKmsKeyId?: string,
     *     status: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED',
     *     statusMessage?: string,
     *     statusUpdateDateTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
