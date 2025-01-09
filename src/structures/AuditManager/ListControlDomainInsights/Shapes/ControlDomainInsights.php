<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlDomainInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $id
 * @property int $controlsCountByNoncompliantEvidence
 * @property int $totalControlsCount
 * @property EvidenceInsights $evidenceInsights
 * @property \Aws\Api\DateTimeResult $lastUpdated
 */
class ControlDomainInsights extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     id?: string,
     *     controlsCountByNoncompliantEvidence?: int,
     *     totalControlsCount?: int,
     *     evidenceInsights?: EvidenceInsights,
     *     lastUpdated?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
