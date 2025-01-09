<?php

namespace Sunaoka\Aws\Structures\WorkDocs\InitiateDocumentVersionUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UploadUrl
 * @property array<string, string> $SignedHeaders
 */
class UploadMetadata extends Shape
{
    /**
     * @param array{
     *     UploadUrl?: string,
     *     SignedHeaders?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
