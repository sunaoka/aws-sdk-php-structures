<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $summary
 * @property string|null $spec
 */
class RecommendationContent extends Shape
{
    /**
     * @param array{
     *     summary: string,
     *     spec?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
