<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateArn
 * @property string|null $TemplateData
 */
class Template extends Shape
{
    /**
     * @param array{
     *     TemplateArn?: string|null,
     *     TemplateData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
