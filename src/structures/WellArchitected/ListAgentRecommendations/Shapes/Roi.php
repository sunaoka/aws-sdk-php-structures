<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListAgentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $estimate
 * @property string $detail
 */
class Roi extends Shape
{
    /**
     * @param array{
     *     estimate?: string|null,
     *     detail: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
