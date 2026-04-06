<?php

namespace Sunaoka\Aws\Structures\WorkLink\AssociateWebsiteAuthorizationProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property 'SAML' $AuthorizationProviderType
 * @property string|null $DomainName
 */
class AssociateWebsiteAuthorizationProviderRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     AuthorizationProviderType: 'SAML',
     *     DomainName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
