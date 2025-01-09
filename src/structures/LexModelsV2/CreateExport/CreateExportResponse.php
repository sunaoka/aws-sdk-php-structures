<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $exportId
 * @property Shapes\ExportResourceSpecification $resourceSpecification
 * @property 'LexJson'|'TSV'|'CSV' $fileFormat
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting' $exportStatus
 * @property \Aws\Api\DateTimeResult $creationDateTime
 */
class CreateExportResponse extends Response
{
}
