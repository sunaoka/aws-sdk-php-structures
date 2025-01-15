<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchGetAssetPropertyValue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchGetAssetPropertyValueErrorEntry> $errorEntries
 * @property list<Shapes\BatchGetAssetPropertyValueSuccessEntry> $successEntries
 * @property list<Shapes\BatchGetAssetPropertyValueSkippedEntry> $skippedEntries
 * @property string|null $nextToken
 */
class BatchGetAssetPropertyValueResponse extends Response
{
}
