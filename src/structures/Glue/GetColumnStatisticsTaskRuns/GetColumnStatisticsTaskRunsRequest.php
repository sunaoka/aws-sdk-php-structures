<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetColumnStatisticsTaskRunsRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
