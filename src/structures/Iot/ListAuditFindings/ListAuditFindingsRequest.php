<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuditFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $taskId
 * @property string|null $checkName
 * @property Shapes\ResourceIdentifier|null $resourceIdentifier
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property bool|null $listSuppressedFindings
 */
class ListAuditFindingsRequest extends Request
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     checkName?: string|null,
     *     resourceIdentifier?: Shapes\ResourceIdentifier|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     listSuppressedFindings?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
