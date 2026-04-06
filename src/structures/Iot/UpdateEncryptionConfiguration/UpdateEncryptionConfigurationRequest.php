<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateEncryptionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CUSTOMER_MANAGED_KMS_KEY'|'AWS_OWNED_KMS_KEY' $encryptionType
 * @property string|null $kmsKeyArn
 * @property string|null $kmsAccessRoleArn
 */
class UpdateEncryptionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     encryptionType: 'CUSTOMER_MANAGED_KMS_KEY'|'AWS_OWNED_KMS_KEY',
     *     kmsKeyArn?: string|null,
     *     kmsAccessRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
