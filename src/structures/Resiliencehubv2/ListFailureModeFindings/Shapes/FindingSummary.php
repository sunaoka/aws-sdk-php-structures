<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListFailureModeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceArn
 * @property string|null $findingId
 * @property string|null $name
 * @property string|null $description
 * @property 'SHARED_FATE'|'EXCESSIVE_LOAD'|'EXCESSIVE_LATENCY'|'MISCONFIGURATION_AND_BUGS'|'SINGLE_POINT_OF_FAILURE'|null $failureCategory
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $severity
 * @property 'OPEN'|'RESOLVED'|'IRRELEVANT'|null $status
 * @property 'AVAILABILITY_SLO'|'MULTI_AZ_DISASTER_RECOVERY'|'MULTI_REGION_DISASTER_RECOVERY'|'DATA_RECOVERY'|null $policyComponent
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class FindingSummary extends Shape
{
    /**
     * @param array{
     *     serviceArn?: string|null,
     *     findingId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     failureCategory?: 'SHARED_FATE'|'EXCESSIVE_LOAD'|'EXCESSIVE_LATENCY'|'MISCONFIGURATION_AND_BUGS'|'SINGLE_POINT_OF_FAILURE'|null,
     *     severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     status?: 'OPEN'|'RESOLVED'|'IRRELEVANT'|null,
     *     policyComponent?: 'AVAILABILITY_SLO'|'MULTI_AZ_DISASTER_RECOVERY'|'MULTI_REGION_DISASTER_RECOVERY'|'DATA_RECOVERY'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
