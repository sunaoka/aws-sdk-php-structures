<?php

namespace Sunaoka\Aws\Structures\SesV2\GetImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property Shapes\ImportDestination|null $ImportDestination
 * @property Shapes\ImportDataSource|null $ImportDataSource
 * @property Shapes\FailureInfo|null $FailureInfo
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletedTimestamp
 * @property int|null $ProcessedRecordsCount
 * @property int|null $FailedRecordsCount
 */
class GetImportJobResponse extends Response
{
}
