<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property Shapes\UpdateBridgeNetworkOutputRequest $NetworkOutput
 * @property string $OutputName
 */
class UpdateBridgeOutputRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     NetworkOutput?: Shapes\UpdateBridgeNetworkOutputRequest,
     *     OutputName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
