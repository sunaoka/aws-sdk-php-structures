<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'CSV'>|null $exportDataFormat
 * @property list<Shapes\ExportFilter>|null $filters
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\ExportPreferences|null $preferences
 */
class StartExportTaskRequest extends Request
{
    /**
     * @param array{
     *     exportDataFormat?: list<'CSV'>|null,
     *     filters?: list<Shapes\ExportFilter>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     preferences?: Shapes\ExportPreferences|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
