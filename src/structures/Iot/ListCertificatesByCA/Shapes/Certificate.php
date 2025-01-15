<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificatesByCA\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateArn
 * @property string|null $certificateId
 * @property 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'|null $status
 * @property 'DEFAULT'|'SNI_ONLY'|null $certificateMode
 * @property \Aws\Api\DateTimeResult|null $creationDate
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string|null,
     *     certificateId?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'|null,
     *     certificateMode?: 'DEFAULT'|'SNI_ONLY'|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
