<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificatePem
 * @property string|null $caCertificatePem
 * @property bool|null $setAsActive
 * @property 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'|null $status
 */
class RegisterCertificateRequest extends Request
{
    /**
     * @param array{
     *     certificatePem: string,
     *     caCertificatePem?: string|null,
     *     setAsActive?: bool|null,
     *     status?: 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
