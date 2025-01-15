<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property list<string> $dependencies
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input' $type
 * @property FormInputCardMetadata $metadata
 * @property 'append'|'replace'|null $computeMode
 */
class FormInputCard extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     dependencies: list<string>,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input',
     *     metadata: FormInputCardMetadata,
     *     computeMode?: 'append'|'replace'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
