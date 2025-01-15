<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KMSKeyId
 * @property 'ENABLED'|'DISABLED'|null $OptInStatus
 * @property 'CUSTOMER_MANAGED_KEY'|'AWS_OWNED_KMS_KEY'|null $Type
 */
class KMSServerSideEncryptionIntegrationConfig extends Shape
{
    /**
     * @param array{
     *     KMSKeyId?: string|null,
     *     OptInStatus?: 'ENABLED'|'DISABLED'|null,
     *     Type?: 'CUSTOMER_MANAGED_KEY'|'AWS_OWNED_KMS_KEY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
