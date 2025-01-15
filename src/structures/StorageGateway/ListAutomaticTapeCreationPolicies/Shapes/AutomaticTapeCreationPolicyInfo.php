<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListAutomaticTapeCreationPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomaticTapeCreationRule>|null $AutomaticTapeCreationRules
 * @property string|null $GatewayARN
 */
class AutomaticTapeCreationPolicyInfo extends Shape
{
    /**
     * @param array{
     *     AutomaticTapeCreationRules?: list<AutomaticTapeCreationRule>|null,
     *     GatewayARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
