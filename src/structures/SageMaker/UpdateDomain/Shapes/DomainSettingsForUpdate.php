<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RStudioServerProDomainSettingsForUpdate $RStudioServerProDomainSettingsForUpdate
 * @property 'USER_PROFILE_NAME'|'DISABLED' $ExecutionRoleIdentityConfig
 * @property list<string> $SecurityGroupIds
 * @property DockerSettings $DockerSettings
 * @property AmazonQSettings $AmazonQSettings
 */
class DomainSettingsForUpdate extends Shape
{
    /**
     * @param array{
     *     RStudioServerProDomainSettingsForUpdate?: RStudioServerProDomainSettingsForUpdate,
     *     ExecutionRoleIdentityConfig?: 'USER_PROFILE_NAME'|'DISABLED',
     *     SecurityGroupIds?: list<string>,
     *     DockerSettings?: DockerSettings,
     *     AmazonQSettings?: AmazonQSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
