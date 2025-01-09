<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $id
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input' $type
 * @property string $prompt
 * @property 'approved-sources'|'llm' $outputSource
 * @property AttributeFilter $attributeFilter
 */
class QQueryCardInput extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     id: string,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input',
     *     prompt: string,
     *     outputSource?: 'approved-sources'|'llm',
     *     attributeFilter?: AttributeFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
