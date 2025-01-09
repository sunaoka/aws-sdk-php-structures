<?php

namespace Sunaoka\Aws\Structures\Omics\GetReferenceImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $referenceStoreId
 * @property string $roleArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLING'|'CANCELLED'|'FAILED'|'COMPLETED'|'COMPLETED_WITH_FAILURES' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $completionTime
 * @property list<Shapes\ImportReferenceSourceItem> $sources
 */
class GetReferenceImportJobResponse extends Response
{
}
