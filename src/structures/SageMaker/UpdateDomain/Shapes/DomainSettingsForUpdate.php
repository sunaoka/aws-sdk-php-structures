<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RStudioServerProDomainSettingsForUpdate|null $RStudioServerProDomainSettingsForUpdate
 * @property 'USER_PROFILE_NAME'|'DISABLED'|null $ExecutionRoleIdentityConfig
 * @property list<string>|null $SecurityGroupIds
 * @property DockerSettings|null $DockerSettings
 * @property AmazonQSettings|null $AmazonQSettings
 */
class DomainSettingsForUpdate extends Shape
{
    /**
     * @param array{
     *     RStudioServerProDomainSettingsForUpdate?: RStudioServerProDomainSettingsForUpdate|null,
     *     ExecutionRoleIdentityConfig?: 'USER_PROFILE_NAME'|'DISABLED'|null,
     *     SecurityGroupIds?: list<string>|null,
     *     DockerSettings?: DockerSettings|null,
     *     AmazonQSettings?: AmazonQSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
