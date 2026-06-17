<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateThreat;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $threatId
 * @property string $agentSpaceId
 * @property string|null $title
 * @property 'OPEN'|'RESOLVED'|'DISMISSED'|null $status
 * @property string|null $comments
 * @property string|null $statement
 * @property 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null $severity
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
class UpdateThreatRequest extends Request
{
    /**
     * @param array{
     *     threatId: string,
     *     agentSpaceId: string,
     *     title?: string|null,
     *     status?: 'OPEN'|'RESOLVED'|'DISMISSED'|null,
     *     comments?: string|null,
     *     statement?: string|null,
     *     severity?: 'CRITICAL'|'HIGH'|'MEDIUM'|'LOW'|'INFO'|null,
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
