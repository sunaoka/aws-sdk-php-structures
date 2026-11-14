<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Domains
 */
class DomainMatch extends Shape
{
    /**
     * @param array{Domains: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
