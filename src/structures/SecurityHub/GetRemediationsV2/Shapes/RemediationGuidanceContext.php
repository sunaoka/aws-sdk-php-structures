<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProblemStatement
 * @property string|null $RiskAssessment
 * @property string|null $AffectedScope
 * @property list<string>|null $Prerequisites
 */
class RemediationGuidanceContext extends Shape
{
    /**
     * @param array{
     *     ProblemStatement?: string|null,
     *     RiskAssessment?: string|null,
     *     AffectedScope?: string|null,
     *     Prerequisites?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
