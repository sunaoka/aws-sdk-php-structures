<?php

namespace Sunaoka\Aws\Structures\QConnect\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelId
 * @property string|null $generationId
 */
class GenerativeReference extends Shape
{
    /**
     * @param array{
     *     modelId?: string|null,
     *     generationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
