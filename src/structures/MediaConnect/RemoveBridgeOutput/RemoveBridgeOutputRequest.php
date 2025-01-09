<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveBridgeOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property string $OutputName
 */
class RemoveBridgeOutputRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     OutputName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
