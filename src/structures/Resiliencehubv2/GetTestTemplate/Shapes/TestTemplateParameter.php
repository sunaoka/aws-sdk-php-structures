<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetTestTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property 'STRING'|'STRING_LIST'|'INTEGER' $type
 * @property bool $required
 * @property string|null $defaultValue
 * @property int|null $maxValues
 */
class TestTemplateParameter extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     type: 'STRING'|'STRING_LIST'|'INTEGER',
     *     required: bool,
     *     defaultValue?: string|null,
     *     maxValues?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
