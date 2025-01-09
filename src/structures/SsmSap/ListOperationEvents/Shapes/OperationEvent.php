<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property Resource $Resource
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class OperationEvent extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Resource?: Resource,
     *     Status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     StatusMessage?: string,
     *     Timestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
