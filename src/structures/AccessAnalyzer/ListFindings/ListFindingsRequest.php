<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property array<string, Shapes\Criterion>|null $filter
 * @property Shapes\SortCriteria|null $sort
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     filter?: array<string, Shapes\Criterion>|null,
     *     sort?: Shapes\SortCriteria|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
