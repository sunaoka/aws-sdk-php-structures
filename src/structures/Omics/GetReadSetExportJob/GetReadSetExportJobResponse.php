<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $sequenceStoreId
 * @property string $destination
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLING'|'CANCELLED'|'FAILED'|'COMPLETED'|'COMPLETED_WITH_FAILURES' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $completionTime
 * @property list<Shapes\ExportReadSetDetail> $readSets
 */
class GetReadSetExportJobResponse extends Response
{
}
