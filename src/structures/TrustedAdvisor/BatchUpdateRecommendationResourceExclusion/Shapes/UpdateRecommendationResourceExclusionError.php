<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\BatchUpdateRecommendationResourceExclusion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class UpdateRecommendationResourceExclusionError extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
