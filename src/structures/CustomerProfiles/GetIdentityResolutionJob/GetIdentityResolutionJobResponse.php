<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetIdentityResolutionJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property string $JobId
 * @property 'PENDING'|'PREPROCESSING'|'FIND_MATCHING'|'MERGING'|'COMPLETED'|'PARTIAL_SUCCESS'|'FAILED' $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $JobStartTime
 * @property \Aws\Api\DateTimeResult $JobEndTime
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property \Aws\Api\DateTimeResult $JobExpirationTime
 * @property Shapes\AutoMerging $AutoMerging
 * @property Shapes\ExportingLocation $ExportingLocation
 * @property Shapes\JobStats $JobStats
 */
class GetIdentityResolutionJobResponse extends Response
{
}
