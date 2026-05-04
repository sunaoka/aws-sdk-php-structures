<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateTargetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DNS_TXT'|'HTTP_ROUTE'|'PRIVATE_VPC'|null $method
 * @property DnsVerification|null $dnsTxt
 * @property HttpVerification|null $httpRoute
 */
class VerificationDetails extends Shape
{
    /**
     * @param array{
     *     method?: 'DNS_TXT'|'HTTP_ROUTE'|'PRIVATE_VPC'|null,
     *     dnsTxt?: DnsVerification|null,
     *     httpRoute?: HttpVerification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
