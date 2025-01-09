<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int $maxResults
 * @property string $namespaceArn
 * @property string $namespaceName
 * @property string $nextToken
 * @property string $ownerAccount
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ListSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     maxResults?: int,
     *     namespaceArn?: string,
     *     namespaceName?: string,
     *     nextToken?: string,
     *     ownerAccount?: string,
     *     startTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
