<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetEncryptionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $kmsKeyId
 * @property 'PENDING'|'SUCCESS'|'FAILURE' $encryptionStatus
 * @property 'KMS_BASED_ENCRYPTION'|'FLEETWISE_DEFAULT_ENCRYPTION' $encryptionType
 * @property string $errorMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $lastModificationTime
 */
class GetEncryptionConfigurationResponse extends Response
{
}
