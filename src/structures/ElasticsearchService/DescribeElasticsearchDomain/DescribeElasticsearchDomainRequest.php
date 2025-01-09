<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DescribeElasticsearchDomainRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
