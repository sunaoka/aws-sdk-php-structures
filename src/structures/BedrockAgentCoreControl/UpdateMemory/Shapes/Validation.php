<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringValidation|null $stringValidation
 * @property StringListValidation|null $stringListValidation
 * @property NumberValidation|null $numberValidation
 */
class Validation extends Shape
{
    /**
     * @param array{
     *     stringValidation?: StringValidation|null,
     *     stringListValidation?: StringListValidation|null,
     *     numberValidation?: NumberValidation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
