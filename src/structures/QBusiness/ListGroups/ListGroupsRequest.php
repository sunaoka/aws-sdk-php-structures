<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $indexId
 * @property \Aws\Api\DateTimeResult $updatedEarlierThan
 * @property string|null $dataSourceId
 * @property string|null $nextToken
 * @property int<1, 10>|null $maxResults
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     indexId: string,
     *     updatedEarlierThan: \Aws\Api\DateTimeResult,
     *     dataSourceId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
