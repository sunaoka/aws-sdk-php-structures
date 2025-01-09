<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string $NextToken
 * @property int<1, 200> $MaxResults
 */
class GetJobRunsRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
