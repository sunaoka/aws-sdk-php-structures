<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListJournalRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $executionId
 * @property int<1, 100>|null $limit
 * @property string|null $nextToken
 * @property string|null $recordType
 * @property 'ASC'|'DESC'|null $order
 */
class ListJournalRecordsRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     executionId: string,
     *     limit?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     recordType?: string|null,
     *     order?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
