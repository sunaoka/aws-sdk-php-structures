<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListArtifacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $artifactId
 * @property string $fileName
 * @property 'TXT'|'PNG'|'JPEG'|'MD'|'PDF'|'DOCX'|'DOC'|'JSON'|'YAML' $artifactType
 */
class ArtifactSummary extends Shape
{
    /**
     * @param array{
     *     artifactId: string,
     *     fileName: string,
     *     artifactType: 'TXT'|'PNG'|'JPEG'|'MD'|'PDF'|'DOCX'|'DOC'|'JSON'|'YAML'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
