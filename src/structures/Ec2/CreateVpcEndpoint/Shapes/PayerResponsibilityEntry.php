<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'vpc-endpoint-charges'|null $Scope
 * @property 'vpc-endpoint-account'|'vpc-endpoint-service-account'|null $PayerResponsibilityType
 */
class PayerResponsibilityEntry extends Shape
{
    /**
     * @param array{
     *     Scope?: 'vpc-endpoint-charges'|null,
     *     PayerResponsibilityType?: 'vpc-endpoint-account'|'vpc-endpoint-service-account'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
