<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificatePem
 * @property string $caCertificatePem
 * @property bool $setAsActive
 * @property 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION' $status
 */
class RegisterCertificateRequest extends Request
{
    /**
     * @param array{
     *     certificatePem: string,
     *     caCertificatePem?: string,
     *     setAsActive?: bool,
     *     status?: 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
