<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property 'Warning'|'Error' $severity
 */
class FlowValidation extends Shape
{
    /**
     * @param array{
     *     message: string,
     *     severity: 'Warning'|'Error'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
