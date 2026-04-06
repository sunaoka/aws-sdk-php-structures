<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeProxyConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'DENY'|'ALERT'|null $PreDNS
 * @property 'ALLOW'|'DENY'|'ALERT'|null $PreREQUEST
 * @property 'ALLOW'|'DENY'|'ALERT'|null $PostRESPONSE
 */
class ProxyConfigDefaultRulePhaseActionsRequest extends Shape
{
    /**
     * @param array{
     *     PreDNS?: 'ALLOW'|'DENY'|'ALERT'|null,
     *     PreREQUEST?: 'ALLOW'|'DENY'|'ALERT'|null,
     *     PostRESPONSE?: 'ALLOW'|'DENY'|'ALERT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
