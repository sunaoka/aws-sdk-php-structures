<?php

namespace Sunaoka\Aws\Structures\WorkLink\DisassociateWebsiteAuthorizationProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string $AuthorizationProviderId
 */
class DisassociateWebsiteAuthorizationProviderRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     AuthorizationProviderId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
