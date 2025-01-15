<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListAutomaticTapeCreationPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GatewayARN
 */
class ListAutomaticTapeCreationPoliciesRequest extends Request
{
    /**
     * @param array{GatewayARN?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
