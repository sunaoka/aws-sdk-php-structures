<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $transferMessage
 * @property string $rejectReason
 * @property \Aws\Api\DateTimeResult $transferDate
 * @property \Aws\Api\DateTimeResult $acceptDate
 * @property \Aws\Api\DateTimeResult $rejectDate
 */
class TransferData extends Shape
{
    /**
     * @param array{
     *     transferMessage?: string,
     *     rejectReason?: string,
     *     transferDate?: \Aws\Api\DateTimeResult,
     *     acceptDate?: \Aws\Api\DateTimeResult,
     *     rejectDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
