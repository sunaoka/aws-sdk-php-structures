<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property Shapes\UpdateBridgeFlowSourceRequest $FlowSource
 * @property Shapes\UpdateBridgeNetworkSourceRequest $NetworkSource
 * @property string $SourceName
 */
class UpdateBridgeSourceRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     FlowSource?: Shapes\UpdateBridgeFlowSourceRequest,
     *     NetworkSource?: Shapes\UpdateBridgeNetworkSourceRequest,
     *     SourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
