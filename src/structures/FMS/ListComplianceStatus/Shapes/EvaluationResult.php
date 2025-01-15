<?php

namespace Sunaoka\Aws\Structures\FMS\ListComplianceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMPLIANT'|'NON_COMPLIANT'|null $ComplianceStatus
 * @property int<0, max>|null $ViolatorCount
 * @property bool|null $EvaluationLimitExceeded
 */
class EvaluationResult extends Shape
{
    /**
     * @param array{
     *     ComplianceStatus?: 'COMPLIANT'|'NON_COMPLIANT'|null,
     *     ViolatorCount?: int<0, max>|null,
     *     EvaluationLimitExceeded?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
