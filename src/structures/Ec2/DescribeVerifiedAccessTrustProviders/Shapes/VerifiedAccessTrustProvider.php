<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVerifiedAccessTrustProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VerifiedAccessTrustProviderId
 * @property string|null $Description
 * @property 'user'|'device'|null $TrustProviderType
 * @property 'iam-identity-center'|'oidc'|null $UserTrustProviderType
 * @property 'jamf'|'crowdstrike'|'jumpcloud'|null $DeviceTrustProviderType
 * @property OidcOptions|null $OidcOptions
 * @property DeviceOptions|null $DeviceOptions
 * @property string|null $PolicyReferenceName
 * @property string|null $CreationTime
 * @property string|null $LastUpdatedTime
 * @property list<Tag>|null $Tags
 * @property VerifiedAccessSseSpecificationResponse|null $SseSpecification
 * @property NativeApplicationOidcOptions|null $NativeApplicationOidcOptions
 */
class VerifiedAccessTrustProvider extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId?: string|null,
     *     Description?: string|null,
     *     TrustProviderType?: 'user'|'device'|null,
     *     UserTrustProviderType?: 'iam-identity-center'|'oidc'|null,
     *     DeviceTrustProviderType?: 'jamf'|'crowdstrike'|'jumpcloud'|null,
     *     OidcOptions?: OidcOptions|null,
     *     DeviceOptions?: DeviceOptions|null,
     *     PolicyReferenceName?: string|null,
     *     CreationTime?: string|null,
     *     LastUpdatedTime?: string|null,
     *     Tags?: list<Tag>|null,
     *     SseSpecification?: VerifiedAccessSseSpecificationResponse|null,
     *     NativeApplicationOidcOptions?: NativeApplicationOidcOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
