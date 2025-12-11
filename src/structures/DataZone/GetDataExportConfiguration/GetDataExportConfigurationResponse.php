<?php

namespace Sunaoka\Aws\Structures\DataZone\GetDataExportConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property bool|null $isExportEnabled
 * @property string|null $s3TableBucketArn
 * @property 'COMPLETED'|'FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetDataExportConfigurationResponse extends Response
{
}
