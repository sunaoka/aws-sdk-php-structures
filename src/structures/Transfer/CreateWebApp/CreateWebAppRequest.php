<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WebAppIdentityProviderDetails $IdentityProviderDetails
 * @property string|null $AccessEndpoint
 * @property Shapes\WebAppUnits|null $WebAppUnits
 * @property list<Shapes\Tag>|null $Tags
 * @property 'FIPS'|'STANDARD'|null $WebAppEndpointPolicy
 * @property Shapes\WebAppEndpointDetails|null $EndpointDetails
 */
class CreateWebAppRequest extends Request
{
    /**
     * @param array{
     *     IdentityProviderDetails: Shapes\WebAppIdentityProviderDetails,
     *     AccessEndpoint?: string|null,
     *     WebAppUnits?: Shapes\WebAppUnits|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     WebAppEndpointPolicy?: 'FIPS'|'STANDARD'|null,
     *     EndpointDetails?: Shapes\WebAppEndpointDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
