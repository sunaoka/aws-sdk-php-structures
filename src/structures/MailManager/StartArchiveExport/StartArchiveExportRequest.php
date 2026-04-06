<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property Shapes\ExportDestinationConfiguration $ExportDestinationConfiguration
 * @property Shapes\ArchiveFilters|null $Filters
 * @property \Aws\Api\DateTimeResult $FromTimestamp
 * @property bool|null $IncludeMetadata
 * @property int|null $MaxResults
 * @property \Aws\Api\DateTimeResult $ToTimestamp
 */
class StartArchiveExportRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     ExportDestinationConfiguration: Shapes\ExportDestinationConfiguration,
     *     Filters?: Shapes\ArchiveFilters|null,
     *     FromTimestamp: \Aws\Api\DateTimeResult,
     *     IncludeMetadata?: bool|null,
     *     MaxResults?: int|null,
     *     ToTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
