<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 * @property Shapes\UpdateWebAppIdentityProviderDetails $IdentityProviderDetails
 * @property string $AccessEndpoint
 * @property Shapes\WebAppUnits $WebAppUnits
 */
class UpdateWebAppRequest extends Request
{
    /**
     * @param array{
     *     WebAppId: string,
     *     IdentityProviderDetails?: Shapes\UpdateWebAppIdentityProviderDetails,
     *     AccessEndpoint?: string,
     *     WebAppUnits?: Shapes\WebAppUnits
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
