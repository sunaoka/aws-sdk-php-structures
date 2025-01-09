<?php

namespace Sunaoka\Aws\Structures\SupplyChain\DeleteInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 */
class DeleteInstanceRequest extends Request
{
    /**
     * @param array{instanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
