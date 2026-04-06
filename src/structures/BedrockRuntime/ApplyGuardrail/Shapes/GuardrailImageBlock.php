<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'png'|'jpeg' $format
 * @property GuardrailImageSource $source
 */
class GuardrailImageBlock extends Shape
{
    /**
     * @param array{
     *     format: 'png'|'jpeg',
     *     source: GuardrailImageSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
