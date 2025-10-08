<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'compliance.assessments.meets_criteria'|'vulnerabilities.is_exploit_available'|'vulnerabilities.is_fix_available'|null $FieldName
 * @property BooleanFilter|null $Filter
 */
class OcsfBooleanFilter extends Shape
{
    /**
     * @param array{
     *     FieldName?: 'compliance.assessments.meets_criteria'|'vulnerabilities.is_exploit_available'|'vulnerabilities.is_fix_available'|null,
     *     Filter?: BooleanFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
