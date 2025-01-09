<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListAutomaticTapeCreationPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class ListAutomaticTapeCreationPoliciesRequest extends Request
{
    /**
     * @param array{GatewayARN?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
