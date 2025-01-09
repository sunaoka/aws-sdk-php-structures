<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListElasticsearchInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticsearchVersion
 * @property string $DomainName
 * @property int<min, 100> $MaxResults
 * @property string $NextToken
 */
class ListElasticsearchInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     ElasticsearchVersion: string,
     *     DomainName?: string,
     *     MaxResults?: int<min, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
