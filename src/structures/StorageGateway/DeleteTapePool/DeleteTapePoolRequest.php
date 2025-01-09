<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteTapePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolARN
 */
class DeleteTapePoolRequest extends Request
{
    /**
     * @param array{PoolARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
