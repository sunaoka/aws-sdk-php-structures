<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogEncryptionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS' $CatalogEncryptionMode
 * @property string|null $SseAwsKmsKeyId
 */
class EncryptionAtRest extends Shape
{
    /**
     * @param array{
     *     CatalogEncryptionMode: 'DISABLED'|'SSE-KMS',
     *     SseAwsKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
