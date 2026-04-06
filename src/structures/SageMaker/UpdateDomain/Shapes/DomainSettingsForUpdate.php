<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RStudioServerProDomainSettingsForUpdate|null $RStudioServerProDomainSettingsForUpdate
 * @property 'USER_PROFILE_NAME'|'DISABLED'|null $ExecutionRoleIdentityConfig
 * @property list<string>|null $SecurityGroupIds
 * @property TrustedIdentityPropagationSettings|null $TrustedIdentityPropagationSettings
 * @property DockerSettings|null $DockerSettings
 * @property AmazonQSettings|null $AmazonQSettings
 * @property UnifiedStudioSettings|null $UnifiedStudioSettings
 * @property 'ipv4'|'dualstack'|null $IpAddressType
 */
class DomainSettingsForUpdate extends Shape
{
    /**
     * @param array{
     *     RStudioServerProDomainSettingsForUpdate?: RStudioServerProDomainSettingsForUpdate|null,
     *     ExecutionRoleIdentityConfig?: 'USER_PROFILE_NAME'|'DISABLED'|null,
     *     SecurityGroupIds?: list<string>|null,
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
