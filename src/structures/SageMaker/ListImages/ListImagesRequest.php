<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListImages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property int $MaxResults
 * @property string $NameContains
 * @property string $NextToken
 * @property 'CREATION_TIME'|'LAST_MODIFIED_TIME'|'IMAGE_NAME' $SortBy
 * @property 'ASCENDING'|'DESCENDING' $SortOrder
 */
class ListImagesRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NameContains?: string,
     *     NextToken?: string,
     *     SortBy?: 'CREATION_TIME'|'LAST_MODIFIED_TIME'|'IMAGE_NAME',
     *     SortOrder?: 'ASCENDING'|'DESCENDING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
