<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property Shapes\UpdateBridgeFlowSourceRequest|null $FlowSource
 * @property Shapes\UpdateBridgeNetworkSourceRequest|null $NetworkSource
 * @property string $SourceName
 */
class UpdateBridgeSourceRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     FlowSource?: Shapes\UpdateBridgeFlowSourceRequest|null,
     *     NetworkSource?: Shapes\UpdateBridgeNetworkSourceRequest|null,
     *     SourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
