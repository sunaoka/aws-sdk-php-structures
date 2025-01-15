<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateWebApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAppId
 * @property Shapes\UpdateWebAppIdentityProviderDetails|null $IdentityProviderDetails
 * @property string|null $AccessEndpoint
 * @property Shapes\WebAppUnits|null $WebAppUnits
 */
class UpdateWebAppRequest extends Request
{
    /**
     * @param array{
     *     WebAppId: string,
     *     IdentityProviderDetails?: Shapes\UpdateWebAppIdentityProviderDetails|null,
     *     AccessEndpoint?: string|null,
     *     WebAppUnits?: Shapes\WebAppUnits|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
