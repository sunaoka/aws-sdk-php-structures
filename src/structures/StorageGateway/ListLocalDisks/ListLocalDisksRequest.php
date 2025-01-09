<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListLocalDisks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class ListLocalDisksRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
