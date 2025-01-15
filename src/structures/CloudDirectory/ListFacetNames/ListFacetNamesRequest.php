<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListFacetNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class ListFacetNamesRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
