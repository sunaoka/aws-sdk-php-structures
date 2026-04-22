<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property array<string, string>|null $headers
 */
class HarnessRemoteMcpConfig extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     headers?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
