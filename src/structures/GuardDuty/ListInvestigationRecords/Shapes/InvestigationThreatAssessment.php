<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Reputation|null $Reputation
 * @property 'VERY_HIGH'|'HIGH'|'MEDIUM'|'LOW'|null $ThreatConfidence
 * @property string|null $Classification
 * @property string|null $Assessment
 * @property string|null $AuthenticationContext
 * @property string|null $RdsControlPlaneActivity
 * @property string|null $IpAccountActivity
 * @property string|null $CredentialCompromise
 */
class InvestigationThreatAssessment extends Shape
{
    /**
     * @param array{
     *     Reputation?: Reputation|null,
     *     ThreatConfidence?: 'VERY_HIGH'|'HIGH'|'MEDIUM'|'LOW'|null,
     *     Classification?: string|null,
     *     Assessment?: string|null,
     *     AuthenticationContext?: string|null,
     *     RdsControlPlaneActivity?: string|null,
     *     IpAccountActivity?: string|null,
     *     CredentialCompromise?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
