<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeOutputs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property list<Shapes\AddBridgeOutputRequest> $Outputs
 */
class AddBridgeOutputsRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     Outputs: list<Shapes\AddBridgeOutputRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
