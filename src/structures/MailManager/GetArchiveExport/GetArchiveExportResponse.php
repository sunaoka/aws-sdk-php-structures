<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ArchiveId
 * @property Shapes\ExportDestinationConfiguration|null $ExportDestinationConfiguration
 * @property Shapes\ArchiveFilters|null $Filters
 * @property \Aws\Api\DateTimeResult|null $FromTimestamp
 * @property int|null $MaxResults
 * @property Shapes\ExportStatus|null $Status
 * @property \Aws\Api\DateTimeResult|null $ToTimestamp
 */
class GetArchiveExportResponse extends Response
{
}
