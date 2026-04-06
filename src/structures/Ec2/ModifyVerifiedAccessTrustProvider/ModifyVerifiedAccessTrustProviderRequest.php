<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessTrustProviderId
 * @property Shapes\ModifyVerifiedAccessTrustProviderOidcOptions|null $OidcOptions
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class ModifyVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId: string,
     *     OidcOptions?: Shapes\ModifyVerifiedAccessTrustProviderOidcOptions|null,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
