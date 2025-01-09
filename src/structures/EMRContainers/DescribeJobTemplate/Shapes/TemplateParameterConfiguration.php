<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NUMBER'|'STRING' $type
 * @property string $defaultValue
 */
class TemplateParameterConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'NUMBER'|'STRING',
     *     defaultValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
