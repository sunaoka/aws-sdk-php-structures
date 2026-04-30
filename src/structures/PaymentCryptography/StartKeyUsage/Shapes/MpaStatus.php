<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\StartKeyUsage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MpaSessionArn
 * @property 'PENDING'|'APPROVED'|'FAILED'|'CANCELLED' $Status
 * @property \Aws\Api\DateTimeResult $InitiationDate
 * @property string|null $StatusMessage
 */
class MpaStatus extends Shape
{
    /**
     * @param array{
     *     MpaSessionArn: string,
     *     Status: 'PENDING'|'APPROVED'|'FAILED'|'CANCELLED',
     *     InitiationDate: \Aws\Api\DateTimeResult,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
