<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property int<1, 100>|null $percentPromotedItems
 * @property string|null $filterArn
 * @property array<string, string>|null $filterValues
 */
class Promotion extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     percentPromotedItems?: int<1, 100>|null,
     *     filterArn?: string|null,
     *     filterValues?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
