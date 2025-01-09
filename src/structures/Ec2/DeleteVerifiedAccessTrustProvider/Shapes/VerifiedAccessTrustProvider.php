<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VerifiedAccessTrustProviderId
 * @property string $Description
 * @property 'user'|'device' $TrustProviderType
 * @property 'iam-identity-center'|'oidc' $UserTrustProviderType
 * @property 'jamf'|'crowdstrike'|'jumpcloud' $DeviceTrustProviderType
 * @property OidcOptions $OidcOptions
 * @property DeviceOptions $DeviceOptions
 * @property string $PolicyReferenceName
 * @property string $CreationTime
 * @property string $LastUpdatedTime
 * @property list<Tag> $Tags
 * @property VerifiedAccessSseSpecificationResponse $SseSpecification
 * @property NativeApplicationOidcOptions $NativeApplicationOidcOptions
 */
class VerifiedAccessTrustProvider extends Shape
{
    /**
     * @param array{
     *     VerifiedAccessTrustProviderId?: string,
     *     Description?: string,
     *     TrustProviderType?: 'user'|'device',
     *     UserTrustProviderType?: 'iam-identity-center'|'oidc',
     *     DeviceTrustProviderType?: 'jamf'|'crowdstrike'|'jumpcloud',
     *     OidcOptions?: OidcOptions,
     *     DeviceOptions?: DeviceOptions,
     *     PolicyReferenceName?: string,
     *     CreationTime?: string,
     *     LastUpdatedTime?: string,
     *     Tags?: list<Tag>,
     *     SseSpecification?: VerifiedAccessSseSpecificationResponse,
     *     NativeApplicationOidcOptions?: NativeApplicationOidcOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
