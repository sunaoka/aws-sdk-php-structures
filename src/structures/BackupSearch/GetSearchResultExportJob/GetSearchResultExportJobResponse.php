<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchResultExportJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExportJobIdentifier
 * @property string $ExportJobArn
 * @property 'RUNNING'|'FAILED'|'COMPLETED' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property string $StatusMessage
 * @property Shapes\ExportSpecification $ExportSpecification
 * @property string $SearchJobArn
 */
class GetSearchResultExportJobResponse extends Response
{
}
