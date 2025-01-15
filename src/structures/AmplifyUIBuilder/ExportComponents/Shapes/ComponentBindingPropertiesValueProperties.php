<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $model
 * @property string|null $field
 * @property list<Predicate>|null $predicates
 * @property string|null $userAttribute
 * @property string|null $bucket
 * @property string|null $key
 * @property string|null $defaultValue
 * @property string|null $slotName
 */
class ComponentBindingPropertiesValueProperties extends Shape
{
    /**
     * @param array{
     *     model?: string|null,
     *     field?: string|null,
     *     predicates?: list<Predicate>|null,
     *     userAttribute?: string|null,
     *     bucket?: string|null,
     *     key?: string|null,
     *     defaultValue?: string|null,
     *     slotName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
