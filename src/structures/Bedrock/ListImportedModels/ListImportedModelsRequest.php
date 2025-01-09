<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListImportedModels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $creationTimeBefore
 * @property \Aws\Api\DateTimeResult $creationTimeAfter
 * @property string $nameContains
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property 'CreationTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 */
class ListImportedModelsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeBefore?: \Aws\Api\DateTimeResult,
     *     creationTimeAfter?: \Aws\Api\DateTimeResult,
     *     nameContains?: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     sortBy?: 'CreationTime',
     *     sortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
