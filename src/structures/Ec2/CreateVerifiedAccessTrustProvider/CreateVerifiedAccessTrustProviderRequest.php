<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'user'|'device' $TrustProviderType
 * @property 'iam-identity-center'|'oidc'|null $UserTrustProviderType
 * @property 'jamf'|'crowdstrike'|'jumpcloud'|null $DeviceTrustProviderType
 * @property Shapes\CreateVerifiedAccessTrustProviderOidcOptions|null $OidcOptions
 * @property Shapes\CreateVerifiedAccessTrustProviderDeviceOptions|null $DeviceOptions
 * @property string $PolicyReferenceName
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property Shapes\VerifiedAccessSseSpecificationRequest|null $SseSpecification
 * @property Shapes\CreateVerifiedAccessNativeApplicationOidcOptions|null $NativeApplicationOidcOptions
 */
class CreateVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     TrustProviderType: 'user'|'device',
     *     UserTrustProviderType?: 'iam-identity-center'|'oidc'|null,
     *     DeviceTrustProviderType?: 'jamf'|'crowdstrike'|'jumpcloud'|null,
     *     OidcOptions?: Shapes\CreateVerifiedAccessTrustProviderOidcOptions|null,
     *     DeviceOptions?: Shapes\CreateVerifiedAccessTrustProviderDeviceOptions|null,
     *     PolicyReferenceName: string,
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     SseSpecification?: Shapes\VerifiedAccessSseSpecificationRequest|null,
     *     NativeApplicationOidcOptions?: Shapes\CreateVerifiedAccessNativeApplicationOidcOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
