<?php

namespace Sunaoka\Aws\Structures\QApps\CreateQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $id
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input' $type
 * @property string $prompt
 * @property 'approved-sources'|'llm'|null $outputSource
 * @property AttributeFilter|null $attributeFilter
 */
class QQueryCardInput extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     id: string,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input',
     *     prompt: string,
     *     outputSource?: 'approved-sources'|'llm'|null,
     *     attributeFilter?: AttributeFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
