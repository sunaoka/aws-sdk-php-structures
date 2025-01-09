<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property \Aws\Api\DateTimeResult $updatedEarlierThan
 * @property string $dataSourceId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     updatedEarlierThan: \Aws\Api\DateTimeResult,
     *     dataSourceId?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
