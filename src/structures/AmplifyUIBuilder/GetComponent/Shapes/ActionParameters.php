<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComponentProperty $type
 * @property ComponentProperty $url
 * @property ComponentProperty $anchor
 * @property ComponentProperty $target
 * @property ComponentProperty $global
 * @property string $model
 * @property ComponentProperty $id
 * @property array<string, ComponentProperty> $fields
 * @property MutationActionSetStateParameter $state
 */
class ActionParameters extends Shape
{
    /**
     * @param array{
     *     type?: ComponentProperty,
     *     url?: ComponentProperty,
     *     anchor?: ComponentProperty,
     *     target?: ComponentProperty,
     *     global?: ComponentProperty,
     *     model?: string,
     *     id?: ComponentProperty,
     *     fields?: array<string, ComponentProperty>,
     *     state?: MutationActionSetStateParameter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
