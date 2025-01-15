<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIdentityResolutionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainName
 * @property string|null $JobId
 * @property 'PENDING'|'PREPROCESSING'|'FIND_MATCHING'|'MERGING'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED'|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $JobStartTime
 * @property \Aws\Api\DateTimeResult|null $JobEndTime
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $JobExpirationTime
 * @property Shapes\AutoMerging|null $AutoMerging
 * @property Shapes\ExportingLocation|null $ExportingLocation
 * @property Shapes\JobStats|null $JobStats
 */
class GetIdentityResolutionJobResponse extends Response
{
}
