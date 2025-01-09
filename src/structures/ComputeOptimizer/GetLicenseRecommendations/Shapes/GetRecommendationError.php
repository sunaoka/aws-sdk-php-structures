<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLicenseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $code
 * @property string $message
 */
class GetRecommendationError extends Shape
{
    /**
     * @param array{
     *     identifier?: string,
     *     code?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
