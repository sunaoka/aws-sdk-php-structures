<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListFacetNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SchemaArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListFacetNamesRequest extends Request
{
    /**
     * @param array{
     *     SchemaArn: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
