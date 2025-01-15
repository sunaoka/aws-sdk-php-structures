<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeExportTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exportId
 * @property 'FAILED'|'SUCCEEDED'|'IN_PROGRESS' $exportStatus
 * @property string $statusMessage
 * @property string|null $configurationsDownloadUrl
 * @property \Aws\Api\DateTimeResult $exportRequestTime
 * @property bool|null $isTruncated
 * @property \Aws\Api\DateTimeResult|null $requestedStartTime
 * @property \Aws\Api\DateTimeResult|null $requestedEndTime
 */
class ExportInfo extends Shape
{
    /**
     * @param array{
     *     exportId: string,
     *     exportStatus: 'FAILED'|'SUCCEEDED'|'IN_PROGRESS',
     *     statusMessage: string,
     *     configurationsDownloadUrl?: string|null,
     *     exportRequestTime: \Aws\Api\DateTimeResult,
     *     isTruncated?: bool|null,
     *     requestedStartTime?: \Aws\Api\DateTimeResult|null,
     *     requestedEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
