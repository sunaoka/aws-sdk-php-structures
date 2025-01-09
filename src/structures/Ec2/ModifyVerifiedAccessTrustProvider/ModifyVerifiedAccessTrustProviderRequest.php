<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessTrustProviderId
 * @property Shapes\ModifyVerifiedAccessTrustProviderOidcOptions $OidcOptions
 * @property Shapes\ModifyVerifiedAccessTrustProviderDeviceOptions $DeviceOptions
 * @property string $Description
 * @property bool $DryRun
 * @property string $ClientToken
 * @property Shapes\VerifiedAccessSseSpecificationRequest $SseSpecification
 * @property Shapes\ModifyVerifiedAccessNativeApplicationOidcOptions $NativeApplicationOidcOptions
 */
class ModifyVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId: string,
     *     OidcOptions?: Shapes\ModifyVerifiedAccessTrustProviderOidcOptions,
     *     DeviceOptions?: Shapes\ModifyVerifiedAccessTrustProviderDeviceOptions,
     *     Description?: string,
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest,
     *     NativeApplicationOidcOptions?: Shapes\ModifyVerifiedAccessNativeApplicationOidcOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
