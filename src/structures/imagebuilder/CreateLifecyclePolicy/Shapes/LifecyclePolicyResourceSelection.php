<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LifecyclePolicyResourceSelectionRecipe>|null $recipes
 * @property array<string, string>|null $tagMap
 */
class LifecyclePolicyResourceSelection extends Shape
{
    /**
     * @param array{
     *     recipes?: list<LifecyclePolicyResourceSelectionRecipe>|null,
     *     tagMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
