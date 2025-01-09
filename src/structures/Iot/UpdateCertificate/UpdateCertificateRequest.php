<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION' $newStatus
 */
class UpdateCertificateRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     newStatus: 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
