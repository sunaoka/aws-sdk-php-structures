<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Organization'|'AccountId'|'ResourceArn'|null $name
 * @property string|null $value
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     name?: 'Organization'|'AccountId'|'ResourceArn'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
