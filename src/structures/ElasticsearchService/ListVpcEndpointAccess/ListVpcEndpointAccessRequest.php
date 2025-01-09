<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $NextToken
 */
class ListVpcEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
