<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateThreat;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $threatId
 * @property string $threatJobId
 * @property string|null $title
 * @property string|null $statement
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null $severity
 * @property 'OPEN'|'RESOLVED'|'DISMISSED'|null $status
 * @property string|null $comments
 * @property list<'SPOOFING'|'TAMPERING'|'REPUDIATION'|'INFORMATION_DISCLOSURE'|'DENIAL_OF_SERVICE'|'ELEVATION_OF_PRIVILEGE'>|null $stride
 * @property string|null $threatSource
 * @property string|null $prerequisites
 * @property string|null $threatAction
 * @property string|null $threatImpact
 * @property list<string>|null $impactedGoal
 * @property list<string>|null $impactedAssets
 * @property Shapes\ThreatAnchorShape|null $anchor
 * @property list<Shapes\ThreatEvidenceShape>|null $evidence
 * @property string|null $recommendation
 * @property 'CUSTOMER'|'AGENT'|null $createdBy
 * @property 'CUSTOMER'|'AGENT'|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CreateThreatResponse extends Response
{
}
