<?php

namespace Sunaoka\Aws\Structures\Odb\GetAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ORACLE_MANAGED'|'AWS_KMS'|'OKV'|'OCI'|null $encryptionKeyProvider
 * @property EncryptionKeyConfiguration|null $encryptionKeyConfiguration
 */
class EncryptionSummary extends Shape
{
    /**
     * @param array{
     *     encryptionKeyProvider?: 'ORACLE_MANAGED'|'AWS_KMS'|'OKV'|'OCI'|null,
     *     encryptionKeyConfiguration?: EncryptionKeyConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
