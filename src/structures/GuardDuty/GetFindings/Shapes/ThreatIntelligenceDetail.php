<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ThreatListName
 * @property list<string>|null $ThreatNames
 */
class ThreatIntelligenceDetail extends Shape
{
    /**
     * @param array{
     *     ThreatListName?: string|null,
     *     ThreatNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
