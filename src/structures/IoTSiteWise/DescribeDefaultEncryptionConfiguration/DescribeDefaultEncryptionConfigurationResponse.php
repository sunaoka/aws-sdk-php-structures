<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDefaultEncryptionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SITEWISE_DEFAULT_ENCRYPTION'|'KMS_BASED_ENCRYPTION' $encryptionType
 * @property string $kmsKeyArn
 * @property Shapes\ConfigurationStatus $configurationStatus
 */
class DescribeDefaultEncryptionConfigurationResponse extends Response
{
}
