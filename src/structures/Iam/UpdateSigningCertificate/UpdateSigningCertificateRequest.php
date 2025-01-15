<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateSigningCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string $CertificateId
 * @property 'Active'|'Inactive' $Status
 */
class UpdateSigningCertificateRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     CertificateId: string,
     *     Status: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
