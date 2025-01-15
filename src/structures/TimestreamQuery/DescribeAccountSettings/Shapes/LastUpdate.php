<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TargetQueryTCU
 * @property 'PENDING'|'FAILED'|'SUCCEEDED'|null $Status
 * @property string|null $StatusMessage
 */
class LastUpdate extends Shape
{
    /**
     * @param array{
     *     TargetQueryTCU?: int|null,
     *     Status?: 'PENDING'|'FAILED'|'SUCCEEDED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
