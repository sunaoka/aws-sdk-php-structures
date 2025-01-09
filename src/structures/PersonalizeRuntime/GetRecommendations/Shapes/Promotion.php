<?php

namespace Sunaoka\Aws\Structures\PersonalizeRuntime\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<1, 100> $percentPromotedItems
 * @property string $filterArn
 * @property array<string, string> $filterValues
 */
class Promotion extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     percentPromotedItems?: int<1, 100>,
     *     filterArn?: string,
     *     filterValues?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
