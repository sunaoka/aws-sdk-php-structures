<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\PutEncryptionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $kmsKeyId
 * @property 'PENDING'|'SUCCESS'|'FAILURE' $encryptionStatus
 * @property 'KMS_BASED_ENCRYPTION'|'FLEETWISE_DEFAULT_ENCRYPTION' $encryptionType
 */
class PutEncryptionConfigurationResponse extends Response
{
}
