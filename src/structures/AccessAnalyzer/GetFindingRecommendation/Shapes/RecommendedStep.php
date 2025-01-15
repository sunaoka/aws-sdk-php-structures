<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnusedPermissionsRecommendedStep|null $unusedPermissionsRecommendedStep
 */
class RecommendedStep extends Shape
{
    /**
     * @param array{unusedPermissionsRecommendedStep?: UnusedPermissionsRecommendedStep|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
