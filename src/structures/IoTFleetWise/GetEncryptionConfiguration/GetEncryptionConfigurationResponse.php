<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetEncryptionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $kmsKeyId
 * @property 'PENDING'|'SUCCESS'|'FAILURE' $encryptionStatus
 * @property 'KMS_BASED_ENCRYPTION'|'FLEETWISE_DEFAULT_ENCRYPTION' $encryptionType
 * @property string|null $errorMessage
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastModificationTime
 */
class GetEncryptionConfigurationResponse extends Response
{
}
