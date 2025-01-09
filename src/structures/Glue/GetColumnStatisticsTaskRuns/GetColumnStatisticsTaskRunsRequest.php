<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property int $MaxResults
 * @property string $NextToken
 */
class GetColumnStatisticsTaskRunsRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
