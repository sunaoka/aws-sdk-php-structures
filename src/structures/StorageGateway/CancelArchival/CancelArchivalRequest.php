<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CancelArchival;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $TapeARN
 */
class CancelArchivalRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     TapeARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
