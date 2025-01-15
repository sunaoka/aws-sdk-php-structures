<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NUMBER'|'STRING'|null $type
 * @property string|null $defaultValue
 */
class TemplateParameterConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'NUMBER'|'STRING'|null,
     *     defaultValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
