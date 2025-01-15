<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComponentProperty|null $type
 * @property ComponentProperty|null $url
 * @property ComponentProperty|null $anchor
 * @property ComponentProperty|null $target
 * @property ComponentProperty|null $global
 * @property string|null $model
 * @property ComponentProperty|null $id
 * @property array<string, ComponentProperty>|null $fields
 * @property MutationActionSetStateParameter|null $state
 */
class ActionParameters extends Shape
{
    /**
     * @param array{
     *     type?: ComponentProperty|null,
     *     url?: ComponentProperty|null,
     *     anchor?: ComponentProperty|null,
     *     target?: ComponentProperty|null,
     *     global?: ComponentProperty|null,
     *     model?: string|null,
     *     id?: ComponentProperty|null,
     *     fields?: array<string, ComponentProperty>|null,
     *     state?: MutationActionSetStateParameter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
