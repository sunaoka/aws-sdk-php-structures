<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransformId
 * @property string $NextToken
 * @property int $MaxResults
 * @property Shapes\TaskRunFilterCriteria $Filter
 * @property Shapes\TaskRunSortCriteria $Sort
 */
class GetMLTaskRunsRequest extends Request
{
    /**
     * @param array{
     *     TransformId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filter?: Shapes\TaskRunFilterCriteria,
     *     Sort?: Shapes\TaskRunSortCriteria
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
