<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\PutDefaultEncryptionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SITEWISE_DEFAULT_ENCRYPTION'|'KMS_BASED_ENCRYPTION' $encryptionType
 * @property string|null $kmsKeyArn
 * @property Shapes\ConfigurationStatus $configurationStatus
 */
class PutDefaultEncryptionConfigurationResponse extends Response
{
}
