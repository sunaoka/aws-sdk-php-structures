<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\DescribeExportConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exportId
 * @property 'FAILED'|'SUCCEEDED'|'IN_PROGRESS' $exportStatus
 * @property string $statusMessage
 * @property string $configurationsDownloadUrl
 * @property \Aws\Api\DateTimeResult $exportRequestTime
 * @property bool $isTruncated
 * @property \Aws\Api\DateTimeResult $requestedStartTime
 * @property \Aws\Api\DateTimeResult $requestedEndTime
 */
class ExportInfo extends Shape
{
    /**
     * @param array{
     *     exportId: string,
     *     exportStatus: 'FAILED'|'SUCCEEDED'|'IN_PROGRESS',
     *     statusMessage: string,
     *     configurationsDownloadUrl?: string,
     *     exportRequestTime: \Aws\Api\DateTimeResult,
     *     isTruncated?: bool,
     *     requestedStartTime?: \Aws\Api\DateTimeResult,
     *     requestedEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
