<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindingsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property array<string, Shapes\Criterion>|null $filter
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\SortCriteria|null $sort
 */
class ListFindingsV2Request extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     filter?: array<string, Shapes\Criterion>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     sort?: Shapes\SortCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
