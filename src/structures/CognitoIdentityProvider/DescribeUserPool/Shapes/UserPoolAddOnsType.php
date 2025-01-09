<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'AUDIT'|'ENFORCED' $AdvancedSecurityMode
 * @property AdvancedSecurityAdditionalFlowsType $AdvancedSecurityAdditionalFlows
 */
class UserPoolAddOnsType extends Shape
{
    /**
     * @param array{
     *     AdvancedSecurityMode: 'OFF'|'AUDIT'|'ENFORCED',
     *     AdvancedSecurityAdditionalFlows?: AdvancedSecurityAdditionalFlowsType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
