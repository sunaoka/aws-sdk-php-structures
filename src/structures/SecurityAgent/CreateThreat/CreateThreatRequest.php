<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateThreat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $threatJobId
 * @property string|null $title
 * @property string|null $statement
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null $severity
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
 */
class CreateThreatRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     threatJobId: string,
     *     title?: string|null,
     *     statement?: string|null,
     *     severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null,
     *     comments?: string|null,
     *     stride?: list<'SPOOFING'|'TAMPERING'|'REPUDIATION'|'INFORMATION_DISCLOSURE'|'DENIAL_OF_SERVICE'|'ELEVATION_OF_PRIVILEGE'>|null,
     *     threatSource?: string|null,
     *     prerequisites?: string|null,
     *     threatAction?: string|null,
     *     threatImpact?: string|null,
     *     impactedGoal?: list<string>|null,
     *     impactedAssets?: list<string>|null,
     *     anchor?: Shapes\ThreatAnchorShape|null,
     *     evidence?: list<Shapes\ThreatEvidenceShape>|null,
     *     recommendation?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
