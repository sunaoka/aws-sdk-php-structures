<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\PutRecommendationPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Organization'|'AccountId'|'ResourceArn' $name
 * @property string $value
 */
class Scope extends Shape
{
    /**
     * @param array{
     *     name?: 'Organization'|'AccountId'|'ResourceArn',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
