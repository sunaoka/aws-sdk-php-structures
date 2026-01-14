<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataExportConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $isExportEnabled
 * @property 'COMPLETED'|'FAILED'|null $status
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property string|null $s3TableBucketArn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetDataExportConfigurationResponse extends Response
{
}
