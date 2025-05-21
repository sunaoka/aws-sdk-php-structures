<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\PutDefaultEncryptionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ConfigurationStatus $configurationStatus
 * @property 'MANAGED_INTEGRATIONS_DEFAULT_ENCRYPTION'|'CUSTOMER_KEY_ENCRYPTION' $encryptionType
 * @property string|null $kmsKeyArn
 */
class PutDefaultEncryptionConfigurationResponse extends Response
{
}
