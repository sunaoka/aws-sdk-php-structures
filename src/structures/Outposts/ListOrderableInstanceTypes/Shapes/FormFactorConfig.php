<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrderableInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RACK'|'SERVER'|null $FormFactor
 * @property 'GENERATION_2'|'GENERATION_1'|null $OutpostGeneration
 */
class FormFactorConfig extends Shape
{
    /**
     * @param array{
     *     FormFactor?: 'RACK'|'SERVER'|null,
     *     OutpostGeneration?: 'GENERATION_2'|'GENERATION_1'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
