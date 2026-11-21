<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogExportConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property Shapes\S3TablesConfigurationResult|null $S3TablesConfiguration
 * @property Shapes\AssetsExportResult|null $Assets
 */
class GetDataCatalogExportConfigurationResponse extends Response
{
}
