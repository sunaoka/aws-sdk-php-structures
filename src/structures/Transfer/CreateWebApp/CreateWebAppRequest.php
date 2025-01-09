<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWebApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WebAppIdentityProviderDetails $IdentityProviderDetails
 * @property string $AccessEndpoint
 * @property Shapes\WebAppUnits $WebAppUnits
 * @property list<Shapes\Tag> $Tags
 */
class CreateWebAppRequest extends Request
{
    /**
     * @param array{
     *     IdentityProviderDetails: Shapes\WebAppIdentityProviderDetails,
     *     AccessEndpoint?: string,
     *     WebAppUnits?: Shapes\WebAppUnits,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
