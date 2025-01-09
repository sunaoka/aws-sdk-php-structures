<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListJobRunsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
