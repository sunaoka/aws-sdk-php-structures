<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property list<string> $dependencies
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin' $type
 * @property string $prompt
 * @property 'approved-sources'|'llm' $outputSource
 * @property AttributeFilter|null $attributeFilter
 */
class QQueryCard extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     dependencies: list<string>,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin',
     *     prompt: string,
     *     outputSource: 'approved-sources'|'llm',
     *     attributeFilter?: AttributeFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
