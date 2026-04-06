<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\CreateKey\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'SYNCHRONIZED' $Status
 * @property string|null $StatusMessage
 */
class ReplicationStatusType extends Shape
{
    /**
     * @param array{
     *     Status: 'IN_PROGRESS'|'DELETE_IN_PROGRESS'|'FAILED'|'SYNCHRONIZED',
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
