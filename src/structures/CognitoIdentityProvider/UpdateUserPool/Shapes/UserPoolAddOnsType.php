<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'AUDIT'|'ENFORCED' $AdvancedSecurityMode
 * @property AdvancedSecurityAdditionalFlowsType|null $AdvancedSecurityAdditionalFlows
 */
class UserPoolAddOnsType extends Shape
{
    /**
     * @param array{
     *     AdvancedSecurityMode: 'OFF'|'AUDIT'|'ENFORCED',
     *     AdvancedSecurityAdditionalFlows?: AdvancedSecurityAdditionalFlowsType|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
