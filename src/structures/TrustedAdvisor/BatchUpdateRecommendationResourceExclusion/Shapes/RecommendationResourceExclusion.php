<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\BatchUpdateRecommendationResourceExclusion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property bool $isExcluded
 */
class RecommendationResourceExclusion extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     isExcluded: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
