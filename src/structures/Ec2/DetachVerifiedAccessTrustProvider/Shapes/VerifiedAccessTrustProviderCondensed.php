<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VerifiedAccessTrustProviderId
 * @property string $Description
 * @property 'user'|'device' $TrustProviderType
 * @property 'iam-identity-center'|'oidc' $UserTrustProviderType
 * @property 'jamf'|'crowdstrike'|'jumpcloud' $DeviceTrustProviderType
 */
class VerifiedAccessTrustProviderCondensed extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId?: string,
     *     Description?: string,
     *     TrustProviderType?: 'user'|'device',
     *     UserTrustProviderType?: 'iam-identity-center'|'oidc',
     *     DeviceTrustProviderType?: 'jamf'|'crowdstrike'|'jumpcloud'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
