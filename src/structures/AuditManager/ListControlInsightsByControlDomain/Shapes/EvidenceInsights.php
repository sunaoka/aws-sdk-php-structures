<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlInsightsByControlDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $noncompliantEvidenceCount
 * @property int|null $compliantEvidenceCount
 * @property int|null $inconclusiveEvidenceCount
 */
class EvidenceInsights extends Shape
{
    /**
     * @param array{
     *     noncompliantEvidenceCount?: int|null,
     *     compliantEvidenceCount?: int|null,
     *     inconclusiveEvidenceCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
