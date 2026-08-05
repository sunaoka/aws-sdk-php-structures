<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogExportConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'DISABLED'|null $ExportSetting
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'FAILED'|null $Status
 * @property Shapes\ExportEncryptionConfiguration|null $EncryptionConfiguration
 * @property string|null $S3TableBucketArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetDataCatalogExportConfigurationResponse extends Response
{
}
