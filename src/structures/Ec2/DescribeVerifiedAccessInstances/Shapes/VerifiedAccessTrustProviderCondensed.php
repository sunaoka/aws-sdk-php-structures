<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VerifiedAccessTrustProviderId
 * @property string|null $Description
 * @property 'user'|'device'|null $TrustProviderType
 * @property 'iam-identity-center'|'oidc'|null $UserTrustProviderType
 * @property 'jamf'|'crowdstrike'|'jumpcloud'|null $DeviceTrustProviderType
 */
class VerifiedAccessTrustProviderCondensed extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId?: string|null,
     *     Description?: string|null,
     *     TrustProviderType?: 'user'|'device'|null,
     *     UserTrustProviderType?: 'iam-identity-center'|'oidc'|null,
     *     DeviceTrustProviderType?: 'jamf'|'crowdstrike'|'jumpcloud'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
