<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ImportSecurityRequirements\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'MD'|'PDF'|'TXT'|'DOCX'|'DOC' $format
 * @property string|resource|\Psr\Http\Message\StreamInterface $content
 */
class SecurityRequirementArtifact extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     format: 'MD'|'PDF'|'TXT'|'DOCX'|'DOC',
     *     content: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
