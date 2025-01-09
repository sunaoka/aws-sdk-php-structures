<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'CSV'> $exportDataFormat
 * @property list<Shapes\ExportFilter> $filters
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\ExportPreferences $preferences
 */
class StartExportTaskRequest extends Request
{
    /**
     * @param array{
     *     exportDataFormat?: list<'CSV'>,
     *     filters?: list<Shapes\ExportFilter>,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     preferences?: Shapes\ExportPreferences
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
