<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceComponents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $NameContains
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property 'InService'|'Creating'|'Updating'|'Failed'|'Deleting' $StatusEquals
 * @property string $EndpointNameEquals
 * @property string $VariantNameEquals
 */
class ListInferenceComponentsRequest extends Request
{
    /**
     * @param array{
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     NameContains?: string,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     StatusEquals?: 'InService'|'Creating'|'Updating'|'Failed'|'Deleting',
     *     EndpointNameEquals?: string,
     *     VariantNameEquals?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
