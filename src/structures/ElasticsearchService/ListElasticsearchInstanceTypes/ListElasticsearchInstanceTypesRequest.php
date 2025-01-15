<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListElasticsearchInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticsearchVersion
 * @property string|null $DomainName
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListElasticsearchInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     ElasticsearchVersion: string,
     *     DomainName?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
