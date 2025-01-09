<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property array<string, string> $KeyAttributes
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListServiceDependentsRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     KeyAttributes: array<string, string>,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
