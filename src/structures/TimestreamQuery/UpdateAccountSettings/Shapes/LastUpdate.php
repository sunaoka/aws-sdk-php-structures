<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TargetQueryTCU
 * @property 'PENDING'|'FAILED'|'SUCCEEDED' $Status
 * @property string $StatusMessage
 */
class LastUpdate extends Shape
{
    /**
     * @param array{
     *     TargetQueryTCU?: int,
     *     Status?: 'PENDING'|'FAILED'|'SUCCEEDED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
