<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $value
 * @property ComponentPropertyBindingProperties|null $bindingProperties
 * @property ComponentPropertyBindingProperties|null $collectionBindingProperties
 * @property string|null $defaultValue
 * @property string|null $model
 * @property array<string, FormBindingElement>|null $bindings
 * @property string|null $event
 * @property string|null $userAttribute
 * @property list<ComponentProperty>|null $concat
 * @property ComponentConditionProperty|null $condition
 * @property bool|null $configured
 * @property string|null $type
 * @property string|null $importedValue
 * @property string|null $componentName
 * @property string|null $property
 */
class ComponentProperty extends Shape
{
    /**
     * @param array{
     *     value?: string|null,
     *     bindingProperties?: ComponentPropertyBindingProperties|null,
     *     collectionBindingProperties?: ComponentPropertyBindingProperties|null,
     *     defaultValue?: string|null,
     *     model?: string|null,
     *     bindings?: array<string, FormBindingElement>|null,
     *     event?: string|null,
     *     userAttribute?: string|null,
     *     concat?: list<ComponentProperty>|null,
     *     condition?: ComponentConditionProperty|null,
     *     configured?: bool|null,
     *     type?: string|null,
     *     importedValue?: string|null,
     *     componentName?: string|null,
     *     property?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
