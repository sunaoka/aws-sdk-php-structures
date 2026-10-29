<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetStorageInfo;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $totalStorageBytesUsed
 * @property Shapes\QuadsIndexesInfo|null $quads
 * @property Shapes\DictionariesInfo|null $dictionaries
 * @property Shapes\UndoLogsMetrics|null $undoLogs
 * @property Shapes\StorageMetrics|null $streams
 * @property Shapes\StorageMetrics|null $dfeStatistics
 * @property Shapes\StorageMetrics|null $schema
 * @property Shapes\StorageMetrics|null $internals
 */
class GetStorageInfoResponse extends Response
{
}
