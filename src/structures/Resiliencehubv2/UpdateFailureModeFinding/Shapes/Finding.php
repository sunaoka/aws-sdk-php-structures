<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\UpdateFailureModeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $findingId
 * @property string|null $name
 * @property string|null $description
 * @property 'SHARED_FATE'|'EXCESSIVE_LOAD'|'EXCESSIVE_LATENCY'|'MISCONFIGURATION_AND_BUGS'|'SINGLE_POINT_OF_FAILURE'|null $failureCategory
 * @property 'OPEN'|'RESOLVED'|'IRRELEVANT'|null $status
 * @property string|null $reasoning
 * @property string|null $comment
 * @property 'LOW'|'MEDIUM'|'HIGH'|null $severity
 * @property list<string>|null $serviceFunctions
 * @property 'AVAILABILITY_SLO'|'MULTI_AZ_DISASTER_RECOVERY'|'MULTI_REGION_DISASTER_RECOVERY'|'DATA_RECOVERY'|null $policyComponent
 * @property list<InfrastructureAndCodeRecommendation>|null $infrastructureAndCodeRecommendations
 * @property list<ObservabilityRecommendation>|null $observabilityRecommendations
 * @property list<TestingRecommendation>|null $testingRecommendations
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Finding extends Shape
{
    /**
     * @param array{
     *     findingId?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     failureCategory?: 'SHARED_FATE'|'EXCESSIVE_LOAD'|'EXCESSIVE_LATENCY'|'MISCONFIGURATION_AND_BUGS'|'SINGLE_POINT_OF_FAILURE'|null,
     *     status?: 'OPEN'|'RESOLVED'|'IRRELEVANT'|null,
     *     reasoning?: string|null,
     *     comment?: string|null,
     *     severity?: 'LOW'|'MEDIUM'|'HIGH'|null,
     *     serviceFunctions?: list<string>|null,
     *     policyComponent?: 'AVAILABILITY_SLO'|'MULTI_AZ_DISASTER_RECOVERY'|'MULTI_REGION_DISASTER_RECOVERY'|'DATA_RECOVERY'|null,
     *     infrastructureAndCodeRecommendations?: list<InfrastructureAndCodeRecommendation>|null,
     *     observabilityRecommendations?: list<ObservabilityRecommendation>|null,
     *     testingRecommendations?: list<TestingRecommendation>|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
