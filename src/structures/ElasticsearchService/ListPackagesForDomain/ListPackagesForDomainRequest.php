<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListPackagesForDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int<min, 100> $MaxResults
 * @property string $NextToken
 */
class ListPackagesForDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: int<min, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
