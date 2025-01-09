<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeBridge;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 */
class DescribeBridgeRequest extends Request
{
    /**
     * @param array{BridgeArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
