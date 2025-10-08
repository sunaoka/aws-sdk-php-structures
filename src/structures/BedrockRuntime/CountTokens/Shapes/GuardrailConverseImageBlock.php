<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'png'|'jpeg' $format
 * @property GuardrailConverseImageSource $source
 */
class GuardrailConverseImageBlock extends Shape
{
    /**
     * @param array{
     *     format: 'png'|'jpeg',
     *     source: GuardrailConverseImageSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
