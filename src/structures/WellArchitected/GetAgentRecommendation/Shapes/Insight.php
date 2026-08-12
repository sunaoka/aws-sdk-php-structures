<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $usagePattern
 * @property string|null $signalsDetected
 */
class Insight extends Shape
{
    /**
     * @param array{
     *     usagePattern: string,
     *     signalsDetected?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
