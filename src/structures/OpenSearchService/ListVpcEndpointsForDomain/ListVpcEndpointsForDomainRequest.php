<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListVpcEndpointsForDomain;

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
