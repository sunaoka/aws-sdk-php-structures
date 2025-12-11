<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClaimMatchValueType $claimMatchValue
 * @property 'EQUALS'|'CONTAINS'|'CONTAINS_ANY' $claimMatchOperator
 */
class AuthorizingClaimMatchValueType extends Shape
{
    /**
     * @param array{
     *     claimMatchValue: ClaimMatchValueType,
     *     claimMatchOperator: 'EQUALS'|'CONTAINS'|'CONTAINS_ANY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
