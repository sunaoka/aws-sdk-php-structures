<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $transferMessage
 * @property string|null $rejectReason
 * @property \Aws\Api\DateTimeResult|null $transferDate
 * @property \Aws\Api\DateTimeResult|null $acceptDate
 * @property \Aws\Api\DateTimeResult|null $rejectDate
 */
class TransferData extends Shape
{
    /**
     * @param array{
     *     transferMessage?: string|null,
     *     rejectReason?: string|null,
     *     transferDate?: \Aws\Api\DateTimeResult|null,
     *     acceptDate?: \Aws\Api\DateTimeResult|null,
     *     rejectDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
