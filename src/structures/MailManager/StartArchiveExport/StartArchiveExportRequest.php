<?php

namespace Sunaoka\Aws\Structures\MailManager\StartArchiveExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property Shapes\ExportDestinationConfiguration $ExportDestinationConfiguration
 * @property Shapes\ArchiveFilters $Filters
 * @property \Aws\Api\DateTimeResult $FromTimestamp
 * @property bool $IncludeMetadata
 * @property int $MaxResults
 * @property \Aws\Api\DateTimeResult $ToTimestamp
 */
class StartArchiveExportRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     ExportDestinationConfiguration: Shapes\ExportDestinationConfiguration,
     *     Filters?: Shapes\ArchiveFilters,
     *     FromTimestamp: \Aws\Api\DateTimeResult,
     *     IncludeMetadata?: bool,
     *     MaxResults?: int,
     *     ToTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
