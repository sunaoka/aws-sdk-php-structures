<?php

namespace Sunaoka\Aws\Structures\SesV2\GetImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property Shapes\ImportDestination $ImportDestination
 * @property Shapes\ImportDataSource $ImportDataSource
 * @property Shapes\FailureInfo $FailureInfo
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED' $JobStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $CompletedTimestamp
 * @property int $ProcessedRecordsCount
 * @property int $FailedRecordsCount
 */
class GetImportJobResponse extends Response
{
}
