<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $sequenceStoreId
 * @property string $destination
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLING'|'CANCELLED'|'FAILED'|'COMPLETED'|'COMPLETED_WITH_FAILURES' $status
 * @property string|null $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $completionTime
 * @property list<Shapes\ExportReadSetDetail>|null $readSets
 */
class GetReadSetExportJobResponse extends Response
{
}
