<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\PutDefaultEncryptionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MANAGED_INTEGRATIONS_DEFAULT_ENCRYPTION'|'CUSTOMER_KEY_ENCRYPTION' $encryptionType
 * @property string|null $kmsKeyArn
 */
class PutDefaultEncryptionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     encryptionType: 'MANAGED_INTEGRATIONS_DEFAULT_ENCRYPTION'|'CUSTOMER_KEY_ENCRYPTION',
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
