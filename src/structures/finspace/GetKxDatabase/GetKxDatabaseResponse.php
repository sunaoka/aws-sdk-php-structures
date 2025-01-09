<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDatabase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $databaseName
 * @property string $databaseArn
 * @property string $environmentId
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property string $lastCompletedChangesetId
 * @property int $numBytes
 * @property int $numChangesets
 * @property int $numFiles
 */
class GetKxDatabaseResponse extends Response
{
}
