<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property int<0, 1000>|null $maxResults
 * @property bool|null $reverseOrder
 * @property string|null $nextToken
 * @property bool|null $includeExecutionData
 */
class GetExecutionHistoryRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     maxResults?: int<0, 1000>|null,
     *     reverseOrder?: bool|null,
     *     nextToken?: string|null,
     *     includeExecutionData?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
