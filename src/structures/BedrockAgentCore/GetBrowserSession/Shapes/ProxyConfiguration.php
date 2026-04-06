<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Proxy> $proxies
 * @property ProxyBypass|null $bypass
 */
class ProxyConfiguration extends Shape
{
    /**
     * @param array{
     *     proxies: list<Proxy>,
     *     bypass?: ProxyBypass|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
