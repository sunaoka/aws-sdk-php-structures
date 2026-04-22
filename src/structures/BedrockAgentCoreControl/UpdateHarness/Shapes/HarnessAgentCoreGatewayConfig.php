<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $gatewayArn
 * @property HarnessGatewayOutboundAuth|null $outboundAuth
 */
class HarnessAgentCoreGatewayConfig extends Shape
{
    /**
     * @param array{
     *     gatewayArn: string,
     *     outboundAuth?: HarnessGatewayOutboundAuth|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
