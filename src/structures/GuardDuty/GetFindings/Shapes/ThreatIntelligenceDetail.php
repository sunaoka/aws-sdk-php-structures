<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ThreatListName
 * @property list<string> $ThreatNames
 * @property string $ThreatFileSha256
 */
class ThreatIntelligenceDetail extends Shape
{
    /**
     * @param array{
     *     ThreatListName?: string,
     *     ThreatNames?: list<string>,
     *     ThreatFileSha256?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
