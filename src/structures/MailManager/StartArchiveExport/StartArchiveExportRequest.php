<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property Shapes\ArchiveFilters|null $Filters
 * @property \Aws\Api\DateTimeResult $FromTimestamp
 * @property \Aws\Api\DateTimeResult $ToTimestamp
 * @property int|null $MaxResults
 * @property Shapes\ExportDestinationConfiguration $ExportDestinationConfiguration
 * @property bool|null $IncludeMetadata
 */
class StartArchiveExportRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     Filters?: Shapes\ArchiveFilters|null,
     *     FromTimestamp: \Aws\Api\DateTimeResult,
     *     ToTimestamp: \Aws\Api\DateTimeResult,
     *     MaxResults?: int|null,
     *     ExportDestinationConfiguration: Shapes\ExportDestinationConfiguration,
     *     IncludeMetadata?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
