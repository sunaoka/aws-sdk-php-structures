<?php

namespace Sunaoka\Aws\Structures\Iot\ListOutgoingCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateArn
 * @property string|null $certificateId
 * @property string|null $transferredTo
 * @property \Aws\Api\DateTimeResult|null $transferDate
 * @property string|null $transferMessage
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class OutgoingCertificate extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string|null,
     *     certificateId?: string|null,
     *     transferredTo?: string|null,
     *     transferDate?: \Aws\Api\DateTimeResult|null,
     *     transferMessage?: string|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
