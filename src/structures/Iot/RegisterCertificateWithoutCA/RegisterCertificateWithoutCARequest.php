<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterCertificateWithoutCA;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificatePem
 * @property 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'|null $status
 */
class RegisterCertificateWithoutCARequest extends Request
{
    /**
     * @param array{
     *     certificatePem: string,
     *     status?: 'ACTIVE'|'INACTIVE'|'REVOKED'|'PENDING_TRANSFER'|'REGISTER_INACTIVE'|'PENDING_ACTIVATION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
