<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ArchiveId
 * @property Shapes\ArchiveFilters|null $Filters
 * @property \Aws\Api\DateTimeResult|null $FromTimestamp
 * @property \Aws\Api\DateTimeResult|null $ToTimestamp
 * @property int|null $MaxResults
 * @property Shapes\ExportDestinationConfiguration|null $ExportDestinationConfiguration
 * @property Shapes\ExportStatus|null $Status
 */
class GetArchiveExportResponse extends Response
{
}
