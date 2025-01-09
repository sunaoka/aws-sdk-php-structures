<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchDomainConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class DescribeElasticsearchDomainConfigRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
