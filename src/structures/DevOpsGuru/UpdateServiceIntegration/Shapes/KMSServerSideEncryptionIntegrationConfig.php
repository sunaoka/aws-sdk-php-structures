<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KMSKeyId
 * @property 'ENABLED'|'DISABLED' $OptInStatus
 * @property 'CUSTOMER_MANAGED_KEY'|'AWS_OWNED_KMS_KEY' $Type
 */
class KMSServerSideEncryptionIntegrationConfig extends Shape
{
    /**
     * @param array{
     *     KMSKeyId?: string,
     *     OptInStatus?: 'ENABLED'|'DISABLED',
     *     Type?: 'CUSTOMER_MANAGED_KEY'|'AWS_OWNED_KMS_KEY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
