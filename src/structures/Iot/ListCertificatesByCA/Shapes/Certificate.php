<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificatesByCA\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateArn
 * @property string $certificateId
 * @property 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION' $status
 * @property 'DEFAULT'|'SNI_ONLY' $certificateMode
 * @property \Aws\Api\DateTimeResult $creationDate
 */
class Certificate extends Shape
{
    /**
     * @param array{
     *     certificateArn?: string,
     *     certificateId?: string,
     *     status?: 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION',
     *     certificateMode?: 'DEFAULT'|'SNI_ONLY',
     *     creationDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
