<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KEY'|null $KeyType
 * @property string|null $KmsKeyArn
 * @property 'UPDATING'|'ENABLED'|'UPDATE_FAILED'|null $EncryptionStatus
 * @property string|null $EncryptionStatusReason
 */
class EncryptionConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     KeyType?: 'AWS_OWNED_KMS_KEY'|'CUSTOMER_MANAGED_KEY'|null,
     *     KmsKeyArn?: string|null,
     *     EncryptionStatus?: 'UPDATING'|'ENABLED'|'UPDATE_FAILED'|null,
     *     EncryptionStatusReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
