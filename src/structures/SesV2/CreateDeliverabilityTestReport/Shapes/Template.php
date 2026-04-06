<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TemplateName
 * @property string|null $TemplateArn
 * @property string|null $TemplateData
 */
class Template extends Shape
{
    /**
     * @param array{
     *     TemplateName?: string|null,
     *     TemplateArn?: string|null,
     *     TemplateData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
