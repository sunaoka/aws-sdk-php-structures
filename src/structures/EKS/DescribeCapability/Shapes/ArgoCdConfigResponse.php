<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 * @property ArgoCdAwsIdcConfigResponse|null $awsIdc
 * @property list<ArgoCdRoleMapping>|null $rbacRoleMappings
 * @property ArgoCdNetworkAccessConfigResponse|null $networkAccess
 * @property string|null $serverUrl
 */
class ArgoCdConfigResponse extends Shape
{
    /**
     * @param array{
     *     namespace?: string|null,
     *     awsIdc?: ArgoCdAwsIdcConfigResponse|null,
     *     rbacRoleMappings?: list<ArgoCdRoleMapping>|null,
     *     networkAccess?: ArgoCdNetworkAccessConfigResponse|null,
     *     serverUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
