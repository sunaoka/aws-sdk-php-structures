<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpointsForDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $NextToken
 */
class ListVpcEndpointsForDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
