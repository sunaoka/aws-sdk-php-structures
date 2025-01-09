<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomains;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DomainNames
 */
class DescribeElasticsearchDomainsRequest extends Request
{
    /**
     * @param array{DomainNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
