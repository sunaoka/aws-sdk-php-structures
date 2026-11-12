<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property array<string, string>|null $headers
 * @property HarnessRemoteMcpOutboundAuth|null $outboundAuth
 */
class HarnessRemoteMcpConfig extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     headers?: array<string, string>|null,
     *     outboundAuth?: HarnessRemoteMcpOutboundAuth|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
