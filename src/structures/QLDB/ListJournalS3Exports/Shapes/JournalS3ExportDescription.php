<?php

namespace Sunaoka\Aws\Structures\QLDB\ListJournalS3Exports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LedgerName
 * @property string $ExportId
 * @property \Aws\Api\DateTimeResult $ExportCreationTime
 * @property 'IN_PROGRESS'|'COMPLETED'|'CANCELLED' $Status
 * @property \Aws\Api\DateTimeResult $InclusiveStartTime
 * @property \Aws\Api\DateTimeResult $ExclusiveEndTime
 * @property S3ExportConfiguration $S3ExportConfiguration
 * @property string $RoleArn
 * @property 'ION_BINARY'|'ION_TEXT'|'JSON' $OutputFormat
 */
class JournalS3ExportDescription extends Shape
{
    /**
     * @param array{
     *     LedgerName: string,
     *     ExportId: string,
     *     ExportCreationTime: \Aws\Api\DateTimeResult,
     *     Status: 'IN_PROGRESS'|'COMPLETED'|'CANCELLED',
     *     InclusiveStartTime: \Aws\Api\DateTimeResult,
     *     ExclusiveEndTime: \Aws\Api\DateTimeResult,
     *     S3ExportConfiguration: S3ExportConfiguration,
     *     RoleArn: string,
     *     OutputFormat?: 'ION_BINARY'|'ION_TEXT'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
