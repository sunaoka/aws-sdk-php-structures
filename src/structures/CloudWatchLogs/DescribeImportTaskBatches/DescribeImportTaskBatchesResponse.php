<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeImportTaskBatches;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $importSourceArn
 * @property string|null $importId
 * @property list<Shapes\ImportBatch>|null $importBatches
 * @property string|null $nextToken
 */
class DescribeImportTaskBatchesResponse extends Response
{
}
