<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateTargetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DNS_TXT'|'HTTP_ROUTE'|null $method
 * @property DnsVerification|null $dnsTxt
 * @property HttpVerification|null $httpRoute
 */
class VerificationDetails extends Shape
{
    /**
     * @param array{
     *     method?: 'DNS_TXT'|'HTTP_ROUTE'|null,
     *     dnsTxt?: DnsVerification|null,
     *     httpRoute?: HttpVerification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
