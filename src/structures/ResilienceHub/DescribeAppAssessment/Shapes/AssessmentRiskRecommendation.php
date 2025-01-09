<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $appComponents
 * @property string $recommendation
 * @property string $risk
 */
class AssessmentRiskRecommendation extends Shape
{
    /**
     * @param array{
     *     appComponents?: list<string>,
     *     recommendation?: string,
     *     risk?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
