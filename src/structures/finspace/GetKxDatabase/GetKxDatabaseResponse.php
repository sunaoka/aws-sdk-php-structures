<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxDatabase;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $databaseName
 * @property string|null $databaseArn
 * @property string|null $environmentId
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property string|null $lastCompletedChangesetId
 * @property int|null $numBytes
 * @property int|null $numChangesets
 * @property int|null $numFiles
 */
class GetKxDatabaseResponse extends Response
{
}
