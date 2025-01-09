<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeWorkingStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class DescribeWorkingStorageRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
