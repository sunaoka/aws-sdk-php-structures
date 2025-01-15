<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NameContains
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property 'InService'|'Creating'|'Updating'|'Failed'|'Deleting'|null $StatusEquals
 * @property string|null $EndpointNameEquals
 * @property string|null $VariantNameEquals
 */
class ListInferenceComponentsRequest extends Request
{
    /**
     * @param array{
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NameContains?: string|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     StatusEquals?: 'InService'|'Creating'|'Updating'|'Failed'|'Deleting'|null,
     *     EndpointNameEquals?: string|null,
     *     VariantNameEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
