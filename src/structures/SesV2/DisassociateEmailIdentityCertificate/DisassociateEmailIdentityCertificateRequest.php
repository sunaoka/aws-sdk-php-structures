<?php

namespace Sunaoka\Aws\Structures\SesV2\DisassociateEmailIdentityCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property string|null $FromAddress
 */
class DisassociateEmailIdentityCertificateRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     FromAddress?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
