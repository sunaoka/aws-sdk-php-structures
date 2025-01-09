<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SecurityGroupIds
 * @property RStudioServerProDomainSettings $RStudioServerProDomainSettings
 * @property 'USER_PROFILE_NAME'|'DISABLED' $ExecutionRoleIdentityConfig
 * @property DockerSettings $DockerSettings
 * @property AmazonQSettings $AmazonQSettings
 */
class DomainSettings extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIds?: list<string>,
     *     RStudioServerProDomainSettings?: RStudioServerProDomainSettings,
     *     ExecutionRoleIdentityConfig?: 'USER_PROFILE_NAME'|'DISABLED',
     *     DockerSettings?: DockerSettings,
     *     AmazonQSettings?: AmazonQSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
