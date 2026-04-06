<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property string|null $NextToken
 * @property int<1, 200>|null $MaxResults
 */
class GetJobRunsRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
