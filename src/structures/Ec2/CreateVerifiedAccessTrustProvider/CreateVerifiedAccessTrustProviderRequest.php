<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'user'|'device' $TrustProviderType
 * @property 'iam-identity-center'|'oidc' $UserTrustProviderType
 * @property 'jamf'|'crowdstrike'|'jumpcloud' $DeviceTrustProviderType
 * @property Shapes\CreateVerifiedAccessTrustProviderOidcOptions $OidcOptions
 * @property Shapes\CreateVerifiedAccessTrustProviderDeviceOptions $DeviceOptions
 * @property string $PolicyReferenceName
 * @property string $Description
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $ClientToken
 * @property bool $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest $SseSpecification
 * @property Shapes\CreateVerifiedAccessNativeApplicationOidcOptions $NativeApplicationOidcOptions
 */
class CreateVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     TrustProviderType: 'user'|'device',
     *     UserTrustProviderType?: 'iam-identity-center'|'oidc',
     *     DeviceTrustProviderType?: 'jamf'|'crowdstrike'|'jumpcloud',
     *     OidcOptions?: Shapes\CreateVerifiedAccessTrustProviderOidcOptions,
     *     DeviceOptions?: Shapes\CreateVerifiedAccessTrustProviderDeviceOptions,
     *     PolicyReferenceName: string,
     *     Description?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     ClientToken?: string,
     *     DryRun?: bool,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest,
     *     NativeApplicationOidcOptions?: Shapes\CreateVerifiedAccessNativeApplicationOidcOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
