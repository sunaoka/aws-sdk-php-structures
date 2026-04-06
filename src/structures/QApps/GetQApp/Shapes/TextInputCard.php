<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property list<string> $dependencies
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input' $type
 * @property string|null $placeholder
 * @property string|null $defaultValue
 */
class TextInputCard extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     dependencies: list<string>,
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
