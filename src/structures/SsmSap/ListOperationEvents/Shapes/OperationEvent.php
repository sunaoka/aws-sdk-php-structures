<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListOperationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property Resource|null $Resource
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class OperationEvent extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Resource?: Resource|null,
     *     Status?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null,
     *     StatusMessage?: string|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
