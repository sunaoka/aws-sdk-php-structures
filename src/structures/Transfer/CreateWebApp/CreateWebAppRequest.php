<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WebAppIdentityProviderDetails $IdentityProviderDetails
 * @property string|null $AccessEndpoint
 * @property Shapes\WebAppUnits|null $WebAppUnits
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateWebAppRequest extends Request
{
    /**
     * @param array{
     *     IdentityProviderDetails: Shapes\WebAppIdentityProviderDetails,
     *     AccessEndpoint?: string|null,
     *     WebAppUnits?: Shapes\WebAppUnits|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
