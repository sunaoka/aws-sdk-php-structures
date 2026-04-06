<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $id
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input' $type
 * @property string|null $placeholder
 * @property string|null $defaultValue
 */
class TextInputCardInput extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     id: string,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input',
     *     placeholder?: string|null,
     *     defaultValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
