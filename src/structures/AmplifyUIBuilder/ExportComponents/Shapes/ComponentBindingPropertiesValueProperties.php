<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $model
 * @property string $field
 * @property list<Predicate> $predicates
 * @property string $userAttribute
 * @property string $bucket
 * @property string $key
 * @property string $defaultValue
 * @property string $slotName
 */
class ComponentBindingPropertiesValueProperties extends Shape
{
    /**
     * @param array{
     *     model?: string,
     *     field?: string,
     *     predicates?: list<Predicate>,
     *     userAttribute?: string,
     *     bucket?: string,
     *     key?: string,
     *     defaultValue?: string,
     *     slotName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
