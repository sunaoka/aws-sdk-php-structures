<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property string $checkName
 * @property Shapes\ResourceIdentifier $resourceIdentifier
 * @property int<1, 250> $maxResults
 * @property string $nextToken
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property bool $listSuppressedFindings
 */
class ListAuditFindingsRequest extends Request
{
    /**
     * @param array{
     *     taskId?: string,
     *     checkName?: string,
     *     resourceIdentifier?: Shapes\ResourceIdentifier,
     *     maxResults?: int<1, 250>,
     *     nextToken?: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     listSuppressedFindings?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
