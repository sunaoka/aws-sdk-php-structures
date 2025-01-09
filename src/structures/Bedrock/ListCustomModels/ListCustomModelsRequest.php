<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListCustomModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $creationTimeBefore
 * @property \Aws\Api\DateTimeResult $creationTimeAfter
 * @property string $nameContains
 * @property string $baseModelArnEquals
 * @property string $foundationModelArnEquals
 * @property int $maxResults
 * @property string $nextToken
 * @property 'CreationTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 * @property bool $isOwned
 */
class ListCustomModelsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeBefore?: \Aws\Api\DateTimeResult,
     *     creationTimeAfter?: \Aws\Api\DateTimeResult,
     *     nameContains?: string,
     *     baseModelArnEquals?: string,
     *     foundationModelArnEquals?: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortBy?: 'CreationTime',
     *     sortOrder?: 'Ascending'|'Descending',
     *     isOwned?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
