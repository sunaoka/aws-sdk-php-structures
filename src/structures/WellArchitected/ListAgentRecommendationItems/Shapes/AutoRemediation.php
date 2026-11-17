<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendationItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deepLink
 * @property string|null $cliCommand
 */
class AutoRemediation extends Shape
{
    /**
     * @param array{
     *     deepLink?: string|null,
     *     cliCommand?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
