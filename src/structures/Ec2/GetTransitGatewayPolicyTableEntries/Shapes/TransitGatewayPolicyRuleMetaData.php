<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPolicyTableEntries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetaDataKey
 * @property string $MetaDataValue
 */
class TransitGatewayPolicyRuleMetaData extends Shape
{
    /**
     * @param array{
     *     MetaDataKey?: string,
     *     MetaDataValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
