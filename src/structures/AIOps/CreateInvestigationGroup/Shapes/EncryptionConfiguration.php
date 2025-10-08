<?php

namespace Sunaoka\Aws\Structures\AIOps\CreateInvestigationGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KMS_KEY'|null $type
 * @property string|null $kmsKeyId
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'AWS_OWNED_KEY'|'CUSTOMER_MANAGED_KMS_KEY'|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
