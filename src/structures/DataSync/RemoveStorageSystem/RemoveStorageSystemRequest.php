<?php

namespace Sunaoka\Aws\Structures\DataSync\RemoveStorageSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageSystemArn
 */
class RemoveStorageSystemRequest extends Request
{
    /**
     * @param array{StorageSystemArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
