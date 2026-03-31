<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\AddArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string|resource|\Psr\Http\Message\StreamInterface $artifactContent
 * @property 'TXT'|'PNG'|'JPEG'|'MD'|'PDF'|'DOCX'|'DOC'|'JSON'|'YAML' $artifactType
 * @property string $fileName
 */
class AddArtifactRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     artifactContent: string|resource|\Psr\Http\Message\StreamInterface,
     *     artifactType: 'TXT'|'PNG'|'JPEG'|'MD'|'PDF'|'DOCX'|'DOC'|'JSON'|'YAML',
     *     fileName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
