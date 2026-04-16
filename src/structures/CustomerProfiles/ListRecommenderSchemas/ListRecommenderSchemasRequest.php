<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListRecommenderSchemas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRecommenderSchemasRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
