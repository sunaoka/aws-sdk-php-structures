<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LifecyclePolicyResourceSelectionRecipe> $recipes
 * @property array<string, string> $tagMap
 */
class LifecyclePolicyResourceSelection extends Shape
{
    /**
     * @param array{
     *     recipes?: list<LifecyclePolicyResourceSelectionRecipe>,
     *     tagMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
