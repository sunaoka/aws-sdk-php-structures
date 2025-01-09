<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImageRecipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemsManagerAgent $systemsManagerAgent
 * @property string $userDataOverride
 */
class AdditionalInstanceConfiguration extends Shape
{
    /**
     * @param array{
     *     systemsManagerAgent?: SystemsManagerAgent,
     *     userDataOverride?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
