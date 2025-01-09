<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property array<string, string> $KeyAttributes
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListServiceDependenciesRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     KeyAttributes: array<string, string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
