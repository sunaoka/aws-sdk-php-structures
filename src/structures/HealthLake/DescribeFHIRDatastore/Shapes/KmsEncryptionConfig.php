<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CUSTOMER_MANAGED_KMS_KEY'|'AWS_OWNED_KMS_KEY' $CmkType
 * @property string $KmsKeyId
 */
class KmsEncryptionConfig extends Shape
{
    /**
     * @param array{
     *     CmkType: 'CUSTOMER_MANAGED_KMS_KEY'|'AWS_OWNED_KMS_KEY',
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
