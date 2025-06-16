<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListCustomModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $creationTimeAfter
 * @property string|null $nameContains
 * @property string|null $baseModelArnEquals
 * @property string|null $foundationModelArnEquals
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'CreationTime'|null $sortBy
 * @property 'Ascending'|'Descending'|null $sortOrder
 * @property bool|null $isOwned
 * @property 'Active'|'Creating'|'Failed'|null $modelStatus
 */
class ListCustomModelsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     creationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     nameContains?: string|null,
     *     baseModelArnEquals?: string|null,
     *     foundationModelArnEquals?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'CreationTime'|null,
     *     sortOrder?: 'Ascending'|'Descending'|null,
     *     isOwned?: bool|null,
     *     modelStatus?: 'Active'|'Creating'|'Failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
