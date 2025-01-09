<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListControlDomainInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $noncompliantEvidenceCount
 * @property int $compliantEvidenceCount
 * @property int $inconclusiveEvidenceCount
 */
class EvidenceInsights extends Shape
{
    /**
     * @param array{
     *     noncompliantEvidenceCount?: int,
     *     compliantEvidenceCount?: int,
     *     inconclusiveEvidenceCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
