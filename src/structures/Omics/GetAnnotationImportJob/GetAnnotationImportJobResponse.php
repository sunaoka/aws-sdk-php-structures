<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property string $destinationName
 * @property string $versionName
 * @property string $roleArn
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $status
 * @property string $statusMessage
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 * @property \Aws\Api\DateTimeResult $completionTime
 * @property list<Shapes\AnnotationImportItemDetail> $items
 * @property bool $runLeftNormalization
 * @property Shapes\FormatOptions $formatOptions
 * @property array<string, string> $annotationFields
 */
class GetAnnotationImportJobResponse extends Response
{
}
