<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SecurityGroupIds
 * @property RStudioServerProDomainSettings|null $RStudioServerProDomainSettings
 * @property 'USER_PROFILE_NAME'|'DISABLED'|null $ExecutionRoleIdentityConfig
 * @property DockerSettings|null $DockerSettings
 * @property AmazonQSettings|null $AmazonQSettings
 */
class DomainSettings extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIds?: list<string>|null,
     *     RStudioServerProDomainSettings?: RStudioServerProDomainSettings|null,
     *     ExecutionRoleIdentityConfig?: 'USER_PROFILE_NAME'|'DISABLED'|null,
     *     DockerSettings?: DockerSettings|null,
     *     AmazonQSettings?: AmazonQSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
