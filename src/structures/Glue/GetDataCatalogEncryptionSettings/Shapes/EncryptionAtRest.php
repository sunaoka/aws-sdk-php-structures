<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogEncryptionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS'|'SSE-KMS-WITH-SERVICE-ROLE' $CatalogEncryptionMode
 * @property string|null $SseAwsKmsKeyId
 * @property string|null $CatalogEncryptionServiceRole
 */
class EncryptionAtRest extends Shape
{
    /**
     * @param array{
     *     CatalogEncryptionMode: 'DISABLED'|'SSE-KMS'|'SSE-KMS-WITH-SERVICE-ROLE',
     *     SseAwsKmsKeyId?: string|null,
     *     CatalogEncryptionServiceRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
