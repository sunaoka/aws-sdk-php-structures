<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetArtifact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $contents
 * @property 'TXT'|'PNG'|'JPEG'|'MD'|'PDF'|'DOCX'|'DOC'|'JSON'|'YAML' $type
 */
class Artifact extends Shape
{
    /**
     * @param array{
     *     contents: string,
     *     type: 'TXT'|'PNG'|'JPEG'|'MD'|'PDF'|'DOCX'|'DOC'|'JSON'|'YAML'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
