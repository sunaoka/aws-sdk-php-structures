<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $NextToken
 * @property int $MaxResults
 */
class GetJobRunsRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
