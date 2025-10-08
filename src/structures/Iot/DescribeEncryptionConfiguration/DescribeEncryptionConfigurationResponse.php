<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeEncryptionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CUSTOMER_MANAGED_KMS_KEY'|'AWS_OWNED_KMS_KEY'|null $encryptionType
 * @property string|null $kmsKeyArn
 * @property string|null $kmsAccessRoleArn
 * @property Shapes\ConfigurationDetails|null $configurationDetails
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class DescribeEncryptionConfigurationResponse extends Response
{
}
