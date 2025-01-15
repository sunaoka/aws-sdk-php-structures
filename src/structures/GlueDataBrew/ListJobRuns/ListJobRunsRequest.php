<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListJobRunsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
