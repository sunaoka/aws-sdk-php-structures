<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListAutomaticTapeCreationPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomaticTapeCreationRule> $AutomaticTapeCreationRules
 * @property string $GatewayARN
 */
class AutomaticTapeCreationPolicyInfo extends Shape
{
    /**
     * @param array{
     *     AutomaticTapeCreationRules?: list<AutomaticTapeCreationRule>,
     *     GatewayARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
