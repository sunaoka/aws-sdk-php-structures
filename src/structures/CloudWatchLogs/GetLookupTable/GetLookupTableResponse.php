<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLookupTable;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $lookupTableArn
 * @property string|null $lookupTableName
 * @property string|null $description
 * @property string|null $tableBody
 * @property int<0, max>|null $sizeBytes
 * @property int<0, max>|null $lastUpdatedTime
 * @property string|null $kmsKeyId
 */
class GetLookupTableResponse extends Response
{
}
