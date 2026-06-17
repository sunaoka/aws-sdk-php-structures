<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetThreats\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $threatId
 * @property string|null $threatJobId
 * @property string|null $title
 * @property string|null $statement
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null $severity
 * @property 'OPEN'|'RESOLVED'|'DISMISSED'|null $status
 * @property string|null $comments
 * @property string|null $threatSource
 * @property string|null $prerequisites
 * @property string|null $threatAction
 * @property string|null $threatImpact
 * @property list<string>|null $impactedGoal
 * @property list<string>|null $impactedAssets
 * @property ThreatAnchorShape|null $anchor
 * @property list<ThreatEvidenceShape>|null $evidence
 * @property list<'SPOOFING'|'TAMPERING'|'REPUDIATION'|'INFORMATION_DISCLOSURE'|'DENIAL_OF_SERVICE'|'ELEVATION_OF_PRIVILEGE'>|null $stride
 * @property string|null $recommendation
 * @property 'CUSTOMER'|'AGENT'|null $createdBy
 * @property 'CUSTOMER'|'AGENT'|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Threat extends Shape
{
    /**
     * @param array{
     *     threatId?: string|null,
     *     threatJobId?: string|null,
     *     title?: string|null,
     *     statement?: string|null,
     *     severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null,
     *     status?: 'OPEN'|'RESOLVED'|'DISMISSED'|null,
     *     comments?: string|null,
     *     threatSource?: string|null,
     *     prerequisites?: string|null,
     *     threatAction?: string|null,
     *     threatImpact?: string|null,
     *     impactedGoal?: list<string>|null,
     *     impactedAssets?: list<string>|null,
     *     anchor?: ThreatAnchorShape|null,
     *     evidence?: list<ThreatEvidenceShape>|null,
     *     stride?: list<'SPOOFING'|'TAMPERING'|'REPUDIATION'|'INFORMATION_DISCLOSURE'|'DENIAL_OF_SERVICE'|'ELEVATION_OF_PRIVILEGE'>|null,
     *     recommendation?: string|null,
     *     createdBy?: 'CUSTOMER'|'AGENT'|null,
     *     updatedBy?: 'CUSTOMER'|'AGENT'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
