<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\BatchUpdateRecommendationResourceExclusion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $errorCode
 * @property string $errorMessage
 */
class UpdateRecommendationResourceExclusionError extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
