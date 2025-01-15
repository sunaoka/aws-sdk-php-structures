<?php

namespace Sunaoka\Aws\Structures\Iot\ListCACertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateArn
 * @property string|null $certificateId
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class CACertificate extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string|null,
     *     certificateId?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
