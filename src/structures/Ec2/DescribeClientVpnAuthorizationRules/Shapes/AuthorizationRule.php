<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnAuthorizationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientVpnEndpointId
 * @property string $Description
 * @property string $GroupId
 * @property bool $AccessAll
 * @property string $DestinationCidr
 * @property ClientVpnAuthorizationRuleStatus $Status
 */
class AuthorizationRule extends Shape
{
    /**
     * @param array{
     *     ClientVpnEndpointId?: string,
     *     Description?: string,
     *     GroupId?: string,
     *     AccessAll?: bool,
     *     DestinationCidr?: string,
     *     Status?: ClientVpnAuthorizationRuleStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
