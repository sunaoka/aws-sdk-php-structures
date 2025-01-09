<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property ComponentPropertyBindingProperties $bindingProperties
 * @property ComponentPropertyBindingProperties $collectionBindingProperties
 * @property string $defaultValue
 * @property string $model
 * @property array<string, FormBindingElement> $bindings
 * @property string $event
 * @property string $userAttribute
 * @property list<ComponentProperty> $concat
 * @property ComponentConditionProperty $condition
 * @property bool $configured
 * @property string $type
 * @property string $importedValue
 * @property string $componentName
 * @property string $property
 */
class ComponentProperty extends Shape
{
    /**
     * @param array{
     *     value?: string,
     *     bindingProperties?: ComponentPropertyBindingProperties,
     *     collectionBindingProperties?: ComponentPropertyBindingProperties,
     *     defaultValue?: string,
     *     model?: string,
     *     bindings?: array<string, FormBindingElement>,
     *     event?: string,
     *     userAttribute?: string,
     *     concat?: list<ComponentProperty>,
     *     condition?: ComponentConditionProperty,
     *     configured?: bool,
     *     type?: string,
     *     importedValue?: string,
     *     componentName?: string,
     *     property?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
