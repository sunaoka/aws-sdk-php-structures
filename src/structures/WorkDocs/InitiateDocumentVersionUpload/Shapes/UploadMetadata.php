<?php

namespace Sunaoka\Aws\Structures\WorkDocs\InitiateDocumentVersionUpload\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UploadUrl
 * @property array<string, string>|null $SignedHeaders
 */
class UploadMetadata extends Shape
{
    /**
     * @param array{
     *     UploadUrl?: string|null,
     *     SignedHeaders?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
