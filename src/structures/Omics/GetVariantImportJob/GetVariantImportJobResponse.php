<?php

namespace Sunaoka\Aws\Structures\Omics\GetVariantImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $destinationName
 * @property string $roleArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property \Aws\Api\DateTimeResult|null $completionTime
 * @property list<Shapes\VariantImportItemDetail> $items
 * @property bool $runLeftNormalization
 * @property array<string, string>|null $annotationFields
 */
class GetVariantImportJobResponse extends Response
{
}
