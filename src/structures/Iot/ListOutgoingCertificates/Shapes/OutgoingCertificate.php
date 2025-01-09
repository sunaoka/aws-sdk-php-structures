<?php

namespace Sunaoka\Aws\Structures\Iot\ListOutgoingCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property string $certificateId
 * @property string $transferredTo
 * @property \Aws\Api\DateTimeResult $transferDate
 * @property string $transferMessage
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class OutgoingCertificate extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string,
     *     certificateId?: string,
     *     transferredTo?: string,
     *     transferDate?: \Aws\Api\DateTimeResult,
     *     transferMessage?: string,
     *     creationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
