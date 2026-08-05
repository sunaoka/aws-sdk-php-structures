<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogExportConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENABLED'|'DISABLED'|null $ExportSetting
 * @property Shapes\ExportEncryptionConfiguration|null $EncryptionConfiguration
 */
class PutDataCatalogExportConfigurationResponse extends Response
{
}
