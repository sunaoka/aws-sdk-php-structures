<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SystemsManagerAgent|null $systemsManagerAgent
 * @property string|null $userDataOverride
 */
class AdditionalInstanceConfiguration extends Shape
{
    /**
     * @param array{
     *     systemsManagerAgent?: SystemsManagerAgent|null,
     *     userDataOverride?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
