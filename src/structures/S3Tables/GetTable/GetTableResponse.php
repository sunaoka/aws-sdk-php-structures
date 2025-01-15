<?php

namespace Sunaoka\Aws\Structures\S3Tables\GetTable;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $name
 * @property 'customer'|'aws' $type
 * @property string $tableARN
 * @property list<string> $namespace
 * @property string $versionToken
 * @property string|null $metadataLocation
 * @property string $warehouseLocation
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string|null $managedByService
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property string $modifiedBy
 * @property string $ownerAccountId
 * @property 'ICEBERG' $format
 */
class GetTableResponse extends Response
{
}
