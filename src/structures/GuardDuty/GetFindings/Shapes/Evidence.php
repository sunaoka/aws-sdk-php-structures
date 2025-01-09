<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ThreatIntelligenceDetail> $ThreatIntelligenceDetails
 */
class Evidence extends Shape
{
    /**
     * @param array{ThreatIntelligenceDetails?: list<ThreatIntelligenceDetail>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
