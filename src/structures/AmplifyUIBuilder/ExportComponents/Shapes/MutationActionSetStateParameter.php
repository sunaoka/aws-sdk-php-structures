<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentName
 * @property string $property
 * @property ComponentProperty $set
 */
class MutationActionSetStateParameter extends Shape
{
    /**
     * @param array{
     *     componentName: string,
     *     property: string,
     *     set: ComponentProperty
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
