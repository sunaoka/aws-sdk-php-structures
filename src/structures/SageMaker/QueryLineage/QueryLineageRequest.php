<?php

namespace Sunaoka\Aws\Structures\SageMaker\QueryLineage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $StartArns
 * @property 'Both'|'Ascendants'|'Descendants' $Direction
 * @property bool $IncludeEdges
 * @property Shapes\QueryFilters $Filters
 * @property int $MaxDepth
 * @property int $MaxResults
 * @property string $NextToken
 */
class QueryLineageRequest extends Request
{
    /**
     * @param array{
     *     StartArns?: list<string>,
     *     Direction?: 'Both'|'Ascendants'|'Descendants',
     *     IncludeEdges?: bool,
     *     Filters?: Shapes\QueryFilters,
     *     MaxDepth?: int,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
