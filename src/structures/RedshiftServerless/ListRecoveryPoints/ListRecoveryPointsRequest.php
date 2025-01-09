<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListRecoveryPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int $maxResults
 * @property string $namespaceArn
 * @property string $namespaceName
 * @property string $nextToken
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ListRecoveryPointsRequest extends Request
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     maxResults?: int,
     *     namespaceArn?: string,
     *     namespaceName?: string,
     *     nextToken?: string,
     *     startTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
