<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPolicyTableEntry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MetaDataKey
 * @property string|null $MetaDataValue
 */
class TransitGatewayRequestPolicyRuleMetaData extends Shape
{
    /**
     * @param array{
     *     MetaDataKey?: string|null,
     *     MetaDataValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
