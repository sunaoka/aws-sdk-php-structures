<?php

namespace Sunaoka\Aws\Structures\FMS\ListComplianceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLIANT'|'NON_COMPLIANT' $ComplianceStatus
 * @property int<0, max> $ViolatorCount
 * @property bool $EvaluationLimitExceeded
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     ComplianceStatus?: 'COMPLIANT'|'NON_COMPLIANT',
     *     ViolatorCount?: int<0, max>,
     *     EvaluationLimitExceeded?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
