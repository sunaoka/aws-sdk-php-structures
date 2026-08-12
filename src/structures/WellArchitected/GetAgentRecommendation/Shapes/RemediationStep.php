<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property string $content
 */
class RemediationStep extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     content: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
