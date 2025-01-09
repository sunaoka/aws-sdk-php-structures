<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DomainNames
 */
class DescribeDomainsRequest extends Request
{
    /**
     * @param array{DomainNames?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
