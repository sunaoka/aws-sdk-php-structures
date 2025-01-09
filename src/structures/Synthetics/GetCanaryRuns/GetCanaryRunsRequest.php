<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanaryRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetCanaryRunsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
