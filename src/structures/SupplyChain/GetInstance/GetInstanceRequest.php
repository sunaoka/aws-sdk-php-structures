<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 */
class GetInstanceRequest extends Request
{
    /**
     * @param array{instanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
