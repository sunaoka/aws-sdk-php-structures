<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendation
 * @property list<string> $steps
 */
class RemediationSummary extends Shape
{
    /**
     * @param array{
     *     recommendation: string,
     *     steps: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
