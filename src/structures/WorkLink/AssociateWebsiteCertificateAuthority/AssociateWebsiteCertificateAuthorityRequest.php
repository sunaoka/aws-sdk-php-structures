<?php

namespace Sunaoka\Aws\Structures\WorkLink\AssociateWebsiteCertificateAuthority;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $Certificate
 * @property string|null $DisplayName
 */
class AssociateWebsiteCertificateAuthorityRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     Certificate: string,
     *     DisplayName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
