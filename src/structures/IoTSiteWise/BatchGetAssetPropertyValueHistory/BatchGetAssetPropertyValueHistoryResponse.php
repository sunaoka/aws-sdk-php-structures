<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValueHistory;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchGetAssetPropertyValueHistoryErrorEntry> $errorEntries
 * @property list<Shapes\BatchGetAssetPropertyValueHistorySuccessEntry> $successEntries
 * @property list<Shapes\BatchGetAssetPropertyValueHistorySkippedEntry> $skippedEntries
 * @property string|null $nextToken
 */
class BatchGetAssetPropertyValueHistoryResponse extends Response
{
}
