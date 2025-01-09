<?php

namespace Sunaoka\Aws\Structures\Iot\ListCACertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property string $certificateId
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class CACertificate extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string,
     *     certificateId?: string,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     creationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
