<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ControlId
 * @property 'PASS'|'FAIL'|'NOT_EXECUTED'|'EXEMPTION_PASS'|null $ControlAssessmentResult
 * @property list<ControlError>|null $Errors
 */
class ControlAssessment extends Shape
{
    /**
     * @param array{
     *     ControlId?: string|null,
     *     ControlAssessmentResult?: 'PASS'|'FAIL'|'NOT_EXECUTED'|'EXEMPTION_PASS'|null,
     *     Errors?: list<ControlError>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
