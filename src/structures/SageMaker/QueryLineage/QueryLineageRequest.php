<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $StartArns
 * @property 'Both'|'Ascendants'|'Descendants'|null $Direction
 * @property bool|null $IncludeEdges
 * @property Shapes\QueryFilters|null $Filters
 * @property int<min, 10>|null $MaxDepth
 * @property int<min, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class QueryLineageRequest extends Request
{
    /**
     * @param array{
     *     StartArns?: list<string>|null,
     *     Direction?: 'Both'|'Ascendants'|'Descendants'|null,
     *     IncludeEdges?: bool|null,
     *     Filters?: Shapes\QueryFilters|null,
     *     MaxDepth?: int<min, 10>|null,
     *     MaxResults?: int<min, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
