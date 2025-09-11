<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SecurityGroupIds
 * @property RStudioServerProDomainSettings|null $RStudioServerProDomainSettings
 * @property 'USER_PROFILE_NAME'|'DISABLED'|null $ExecutionRoleIdentityConfig
 * @property TrustedIdentityPropagationSettings|null $TrustedIdentityPropagationSettings
 * @property DockerSettings|null $DockerSettings
 * @property AmazonQSettings|null $AmazonQSettings
 * @property UnifiedStudioSettings|null $UnifiedStudioSettings
 * @property 'ipv4'|'dualstack'|null $IpAddressType
 */
class DomainSettings extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIds?: list<string>|null,
     *     RStudioServerProDomainSettings?: RStudioServerProDomainSettings|null,
     *     ExecutionRoleIdentityConfig?: 'USER_PROFILE_NAME'|'DISABLED'|null,
     *     TrustedIdentityPropagationSettings?: TrustedIdentityPropagationSettings|null,
     *     DockerSettings?: DockerSettings|null,
     *     AmazonQSettings?: AmazonQSettings|null,
     *     UnifiedStudioSettings?: UnifiedStudioSettings|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
