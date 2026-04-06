<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageSystemArn
 */
class DescribeStorageSystemRequest extends Request
{
    /**
     * @param array{StorageSystemArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
