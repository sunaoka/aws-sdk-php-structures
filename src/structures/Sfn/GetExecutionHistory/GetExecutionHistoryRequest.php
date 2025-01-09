<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property int<0, 1000> $maxResults
 * @property bool $reverseOrder
 * @property string $nextToken
 * @property bool $includeExecutionData
 */
class GetExecutionHistoryRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     maxResults?: int<0, 1000>,
     *     reverseOrder?: bool,
     *     nextToken?: string,
     *     includeExecutionData?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
