<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'vpc-endpoint-charges'|'resource-gateway-charges'|null $Scope
 * @property 'vpc-endpoint-account'|'resource-gateway-account'|'vpc-endpoint-service-account'|null $PayerResponsibilityType
 */
class PayerResponsibilityEntry extends Shape
{
    /**
     * @param array{
     *     Scope?: 'vpc-endpoint-charges'|'resource-gateway-charges'|null,
     *     PayerResponsibilityType?: 'vpc-endpoint-account'|'resource-gateway-account'|'vpc-endpoint-service-account'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
