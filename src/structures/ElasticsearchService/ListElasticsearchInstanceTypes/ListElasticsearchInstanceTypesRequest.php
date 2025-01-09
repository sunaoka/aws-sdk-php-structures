<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListElasticsearchInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ElasticsearchVersion
 * @property string $DomainName
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListElasticsearchInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     ElasticsearchVersion: string,
     *     DomainName?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
