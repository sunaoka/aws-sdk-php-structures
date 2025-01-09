<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pdf'|'csv'|'doc'|'docx'|'xls'|'xlsx'|'html'|'txt'|'md' $format
 * @property string $name
 * @property DocumentSource $source
 */
class DocumentBlock extends Shape
{
    /**
     * @param array{
     *     format: 'pdf'|'csv'|'doc'|'docx'|'xls'|'xlsx'|'html'|'txt'|'md',
     *     name: string,
     *     source: DocumentSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
