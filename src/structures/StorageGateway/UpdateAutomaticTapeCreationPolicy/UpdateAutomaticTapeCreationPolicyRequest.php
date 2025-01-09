<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateAutomaticTapeCreationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutomaticTapeCreationRule> $AutomaticTapeCreationRules
 * @property string $GatewayARN
 */
class UpdateAutomaticTapeCreationPolicyRequest extends Request
{
    /**
     * @param array{
     *     AutomaticTapeCreationRules: list<Shapes\AutomaticTapeCreationRule>,
     *     GatewayARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
