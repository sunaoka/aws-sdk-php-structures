<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListImageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property string $ImageName
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property 'CREATION_TIME'|'LAST_MODIFIED_TIME'|'VERSION' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class ListImageVersionsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     ImageName: string,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     SortBy?: 'CREATION_TIME'|'LAST_MODIFIED_TIME'|'VERSION',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
