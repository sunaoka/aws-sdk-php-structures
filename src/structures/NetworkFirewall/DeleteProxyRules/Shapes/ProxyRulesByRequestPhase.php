<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteProxyRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ProxyRule>|null $PreDNS
 * @property list<ProxyRule>|null $PreREQUEST
 * @property list<ProxyRule>|null $PostRESPONSE
 */
class ProxyRulesByRequestPhase extends Shape
{
    /**
     * @param array{
     *     PreDNS?: list<ProxyRule>|null,
     *     PreREQUEST?: list<ProxyRule>|null,
     *     PostRESPONSE?: list<ProxyRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
