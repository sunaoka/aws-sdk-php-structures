<?php

namespace Sunaoka\Aws\Structures\QLDB\ExportJournalToS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $InclusiveStartTime
 * @property \Aws\Api\DateTimeResult $ExclusiveEndTime
 * @property Shapes\S3ExportConfiguration $S3ExportConfiguration
 * @property string $RoleArn
 * @property 'ION_BINARY'|'ION_TEXT'|'JSON' $OutputFormat
 */
class ExportJournalToS3Request extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InclusiveStartTime: \Aws\Api\DateTimeResult,
     *     ExclusiveEndTime: \Aws\Api\DateTimeResult,
     *     S3ExportConfiguration: Shapes\S3ExportConfiguration,
     *     RoleArn: string,
     *     OutputFormat?: 'ION_BINARY'|'ION_TEXT'|'JSON'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
