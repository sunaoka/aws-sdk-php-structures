<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelPackages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property int<1, 100> $MaxResults
 * @property string $NameContains
 * @property 'Approved'|'Rejected'|'PendingManualApproval' $ModelApprovalStatus
 * @property string $ModelPackageGroupName
 * @property 'Versioned'|'Unversioned'|'Both' $ModelPackageType
 * @property string $NextToken
 * @property 'Name'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListModelPackagesRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int<1, 100>,
     *     NameContains?: string,
     *     ModelApprovalStatus?: 'Approved'|'Rejected'|'PendingManualApproval',
     *     ModelPackageGroupName?: string,
     *     ModelPackageType?: 'Versioned'|'Unversioned'|'Both',
     *     NextToken?: string,
     *     SortBy?: 'Name'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
