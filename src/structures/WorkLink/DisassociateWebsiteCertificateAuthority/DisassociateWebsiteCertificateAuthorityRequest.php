<?php

namespace Sunaoka\Aws\Structures\WorkLink\DisassociateWebsiteCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $WebsiteCaId
 */
class DisassociateWebsiteCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     WebsiteCaId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
