<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 * @property ArgoCdAwsIdcConfigRequest $awsIdc
 * @property list<ArgoCdRoleMapping>|null $rbacRoleMappings
 * @property ArgoCdNetworkAccessConfigRequest|null $networkAccess
 */
class ArgoCdConfigRequest extends Shape
{
    /**
     * @param array{
     *     namespace?: string|null,
     *     awsIdc: ArgoCdAwsIdcConfigRequest,
     *     rbacRoleMappings?: list<ArgoCdRoleMapping>|null,
     *     networkAccess?: ArgoCdNetworkAccessConfigRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
