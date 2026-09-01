<?php

namespace Sunaoka\Aws\Structures\SesV2\AssociateEmailIdentityCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property string|null $FromAddress
 * @property string $CertificateArn
 */
class AssociateEmailIdentityCertificateRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     FromAddress?: string|null,
     *     CertificateArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
