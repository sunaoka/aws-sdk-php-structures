<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogEncryptionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS'|'SSE-KMS-WITH-SERVICE-ROLE' $CatalogEncryptionMode
 * @property string $SseAwsKmsKeyId
 * @property string $CatalogEncryptionServiceRole
 */
class EncryptionAtRest extends Shape
{
    /**
     * @param array{
     *     CatalogEncryptionMode: 'DISABLED'|'SSE-KMS'|'SSE-KMS-WITH-SERVICE-ROLE',
     *     SseAwsKmsKeyId?: string,
     *     CatalogEncryptionServiceRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
