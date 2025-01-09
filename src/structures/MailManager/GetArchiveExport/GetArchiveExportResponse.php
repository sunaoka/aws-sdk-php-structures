<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ArchiveId
 * @property Shapes\ExportDestinationConfiguration $ExportDestinationConfiguration
 * @property Shapes\ArchiveFilters $Filters
 * @property \Aws\Api\DateTimeResult $FromTimestamp
 * @property int $MaxResults
 * @property Shapes\ExportStatus $Status
 * @property \Aws\Api\DateTimeResult $ToTimestamp
 */
class GetArchiveExportResponse extends Response
{
}
