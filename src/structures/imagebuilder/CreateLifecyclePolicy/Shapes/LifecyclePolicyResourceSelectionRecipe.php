<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $semanticVersion
 */
class LifecyclePolicyResourceSelectionRecipe extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     semanticVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
