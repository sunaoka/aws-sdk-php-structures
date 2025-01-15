<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\PutEncryptionConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $kmsKeyId
 * @property 'KMS_BASED_ENCRYPTION'|'FLEETWISE_DEFAULT_ENCRYPTION' $encryptionType
 */
class PutEncryptionConfigurationRequest extends Request
{
    /**
     * @param array{
     *     kmsKeyId?: string|null,
     *     encryptionType: 'KMS_BASED_ENCRYPTION'|'FLEETWISE_DEFAULT_ENCRYPTION'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
