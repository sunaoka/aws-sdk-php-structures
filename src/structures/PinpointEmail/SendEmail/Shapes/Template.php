<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TemplateArn
 * @property string $TemplateData
 */
class Template extends Shape
{
    /**
     * @param array{
     *     TemplateArn?: string,
     *     TemplateData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
