<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRecommendedPolicyV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnusedPermissionsRecommendationStep|null $UnusedPermissions
 */
class RecommendationStep extends Shape
{
    /**
     * @param array{UnusedPermissions?: UnusedPermissionsRecommendationStep|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
