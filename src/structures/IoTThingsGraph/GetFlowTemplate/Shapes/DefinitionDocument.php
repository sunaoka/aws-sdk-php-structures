<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetFlowTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GRAPHQL' $language
 * @property string $text
 */
class DefinitionDocument extends Shape
{
    /**
     * @param array{
     *     language: 'GRAPHQL',
     *     text: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
