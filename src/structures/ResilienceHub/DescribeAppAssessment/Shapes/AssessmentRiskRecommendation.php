<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $appComponents
 * @property string|null $recommendation
 * @property string|null $risk
 */
class AssessmentRiskRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponents?: list<string>|null,
     *     recommendation?: string|null,
     *     risk?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
