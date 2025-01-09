<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $exportId
 * @property Shapes\ExportResourceSpecification $resourceSpecification
 * @property 'LexJson'|'TSV'|'CSV' $fileFormat
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting' $exportStatus
 * @property list<string> $failureReasons
 * @property string $downloadUrl
 * @property \Aws\Api\DateTimeResult $creationDateTime
 * @property \Aws\Api\DateTimeResult $lastUpdatedDateTime
 */
class DescribeExportResponse extends Response
{
}
