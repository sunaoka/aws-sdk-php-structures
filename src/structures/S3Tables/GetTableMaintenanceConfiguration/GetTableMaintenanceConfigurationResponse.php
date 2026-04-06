<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableMaintenanceConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $tableARN
 * @property array<'icebergCompaction'|'icebergSnapshotManagement', Shapes\TableMaintenanceConfigurationValue> $configuration
 */
class GetTableMaintenanceConfigurationResponse extends Response
{
}
