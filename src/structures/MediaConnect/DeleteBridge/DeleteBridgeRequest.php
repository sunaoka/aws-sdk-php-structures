<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteBridge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 */
class DeleteBridgeRequest extends Request
{
    /**
     * @param array{BridgeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
