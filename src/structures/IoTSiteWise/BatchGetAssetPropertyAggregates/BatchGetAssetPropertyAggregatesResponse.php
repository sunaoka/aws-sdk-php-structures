<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyAggregates;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchGetAssetPropertyAggregatesErrorEntry> $errorEntries
 * @property list<Shapes\BatchGetAssetPropertyAggregatesSuccessEntry> $successEntries
 * @property list<Shapes\BatchGetAssetPropertyAggregatesSkippedEntry> $skippedEntries
 * @property string $nextToken
 */
class BatchGetAssetPropertyAggregatesResponse extends Response
{
}
