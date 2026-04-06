<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessTrustProviderId
 * @property Shapes\ModifyVerifiedAccessTrustProviderOidcOptions|null $OidcOptions
 * @property Shapes\ModifyVerifiedAccessTrustProviderDeviceOptions|null $DeviceOptions
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property Shapes\VerifiedAccessSseSpecificationRequest|null $SseSpecification
 * @property Shapes\ModifyVerifiedAccessNativeApplicationOidcOptions|null $NativeApplicationOidcOptions
 */
class ModifyVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId: string,
     *     OidcOptions?: Shapes\ModifyVerifiedAccessTrustProviderOidcOptions|null,
     *     DeviceOptions?: Shapes\ModifyVerifiedAccessTrustProviderDeviceOptions|null,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest|null,
     *     NativeApplicationOidcOptions?: Shapes\ModifyVerifiedAccessNativeApplicationOidcOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
