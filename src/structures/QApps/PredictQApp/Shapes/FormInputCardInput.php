<?php

namespace Sunaoka\Aws\Structures\QApps\PredictQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $id
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input' $type
 * @property FormInputCardMetadata $metadata
 * @property 'append'|'replace'|null $computeMode
 */
class FormInputCardInput extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     id: string,
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
