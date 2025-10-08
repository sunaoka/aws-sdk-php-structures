<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pdf'|'csv'|'doc'|'docx'|'xls'|'xlsx'|'html'|'txt'|'md'|null $format
 * @property string $name
 * @property DocumentSource $source
 * @property string|null $context
 * @property CitationsConfig|null $citations
 */
class DocumentBlock extends Shape
{
    /**
     * @param array{
     *     format?: 'pdf'|'csv'|'doc'|'docx'|'xls'|'xlsx'|'html'|'txt'|'md'|null,
     *     name: string,
     *     source: DocumentSource,
     *     context?: string|null,
     *     citations?: CitationsConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
