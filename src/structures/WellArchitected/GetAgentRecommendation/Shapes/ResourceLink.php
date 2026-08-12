<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property string|null $title
 */
class ResourceLink extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     title?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
