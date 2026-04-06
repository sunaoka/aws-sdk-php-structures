<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTableBucketMaintenanceConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $tableBucketARN
 * @property array<'icebergUnreferencedFileRemoval', Shapes\TableBucketMaintenanceConfigurationValue> $configuration
 */
class GetTableBucketMaintenanceConfigurationResponse extends Response
{
}
