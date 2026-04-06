<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchResultExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExportJobIdentifier
 * @property string|null $ExportJobArn
 * @property 'RUNNING'|'FAILED'|'COMPLETED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
 * @property string|null $StatusMessage
 * @property Shapes\ExportSpecification|null $ExportSpecification
 * @property string|null $SearchJobArn
 */
class GetSearchResultExportJobResponse extends Response
{
}
