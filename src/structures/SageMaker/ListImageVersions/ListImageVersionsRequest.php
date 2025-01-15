<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListImageVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property string $ImageName
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'CREATION_TIME'|'LAST_MODIFIED_TIME'|'VERSION'|null $SortBy
 * @property 'ASCENDING'|'DESCENDING'|null $SortOrder
 */
class ListImageVersionsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     ImageName: string,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     SortBy?: 'CREATION_TIME'|'LAST_MODIFIED_TIME'|'VERSION'|null,
     *     SortOrder?: 'ASCENDING'|'DESCENDING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
