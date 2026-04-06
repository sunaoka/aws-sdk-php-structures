<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'user'|'device' $TrustProviderType
 * @property 'iam-identity-center'|'oidc'|null $UserTrustProviderType
 * @property 'jamf'|'crowdstrike'|null $DeviceTrustProviderType
 * @property Shapes\CreateVerifiedAccessTrustProviderOidcOptions|null $OidcOptions
 * @property Shapes\CreateVerifiedAccessTrustProviderDeviceOptions|null $DeviceOptions
 * @property string $PolicyReferenceName
 * @property string|null $Description
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class CreateVerifiedAccessTrustProviderRequest extends Request
{
    /**
     * @param array{
     *     TrustProviderType: 'user'|'device',
     *     UserTrustProviderType?: 'iam-identity-center'|'oidc'|null,
     *     DeviceTrustProviderType?: 'jamf'|'crowdstrike'|null,
     *     OidcOptions?: Shapes\CreateVerifiedAccessTrustProviderOidcOptions|null,
     *     DeviceOptions?: Shapes\CreateVerifiedAccessTrustProviderDeviceOptions|null,
     *     PolicyReferenceName: string,
     *     Description?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
