<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property Shapes\TaskRunFilterCriteria|null $Filter
 * @property Shapes\TaskRunSortCriteria|null $Sort
 */
class GetMLTaskRunsRequest extends Request
{
    /**
     * @param array{
     *     TransformId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Filter?: Shapes\TaskRunFilterCriteria|null,
     *     Sort?: Shapes\TaskRunSortCriteria|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
