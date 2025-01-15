<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnAuthorizationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientVpnEndpointId
 * @property string|null $Description
 * @property string|null $GroupId
 * @property bool|null $AccessAll
 * @property string|null $DestinationCidr
 * @property ClientVpnAuthorizationRuleStatus|null $Status
 */
class AuthorizationRule extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string|null,
     *     Description?: string|null,
     *     GroupId?: string|null,
     *     AccessAll?: bool|null,
     *     DestinationCidr?: string|null,
     *     Status?: ClientVpnAuthorizationRuleStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
