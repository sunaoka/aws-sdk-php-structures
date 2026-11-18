<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INVOKE_MODEL' $api
 * @property string $model
 */
class BedrockFunctionTarget extends Shape
{
    /**
     * @param array{
     *     api: 'INVOKE_MODEL',
     *     model: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
