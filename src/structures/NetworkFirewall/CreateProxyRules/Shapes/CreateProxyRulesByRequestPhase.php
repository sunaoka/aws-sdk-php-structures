<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxyRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CreateProxyRule>|null $PreDNS
 * @property list<CreateProxyRule>|null $PreREQUEST
 * @property list<CreateProxyRule>|null $PostRESPONSE
 */
class CreateProxyRulesByRequestPhase extends Shape
{
    /**
     * @param array{
     *     PreDNS?: list<CreateProxyRule>|null,
     *     PreREQUEST?: list<CreateProxyRule>|null,
     *     PostRESPONSE?: list<CreateProxyRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
