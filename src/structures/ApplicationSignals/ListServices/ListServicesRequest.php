<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListServicesRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
