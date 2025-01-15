<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $exportId
 * @property Shapes\ExportResourceSpecification|null $resourceSpecification
 * @property 'LexJson'|'TSV'|'CSV'|null $fileFormat
 * @property 'InProgress'|'Completed'|'Failed'|'Deleting'|null $exportStatus
 * @property list<string>|null $failureReasons
 * @property string|null $downloadUrl
 * @property \Aws\Api\DateTimeResult|null $creationDateTime
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedDateTime
 */
class DescribeExportResponse extends Response
{
}
