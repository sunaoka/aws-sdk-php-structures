<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property string|null $Identifier
 * @property string|null $FindingId
 * @property int<0, max>|null $FindingCount
 * @property 'Info'|'Low'|'Medium'|'High'|'Critical'|null $RiskLevel
 * @property string|null $RiskRationale
 */
class RepresentativeFinding extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     Identifier?: string|null,
     *     FindingId?: string|null,
     *     FindingCount?: int<0, max>|null,
     *     RiskLevel?: 'Info'|'Low'|'Medium'|'High'|'Critical'|null,
     *     RiskRationale?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
