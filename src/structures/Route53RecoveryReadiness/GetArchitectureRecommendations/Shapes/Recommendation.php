<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetArchitectureRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendationText
 */
class Recommendation extends Shape
{
    /**
     * @param array{RecommendationText: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
