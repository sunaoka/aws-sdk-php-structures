<?php

namespace Sunaoka\Aws\Structures\Rds\StartExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportTaskIdentifier
 * @property string $SourceArn
 * @property string $S3BucketName
 * @property string $IamRoleArn
 * @property string $KmsKeyId
 * @property string $S3Prefix
 * @property list<string> $ExportOnly
 */
class StartExportTaskRequest extends Request
{
    /**
     * @param array{
     *     ExportTaskIdentifier: string,
     *     SourceArn: string,
     *     S3BucketName: string,
     *     IamRoleArn: string,
     *     KmsKeyId: string,
     *     S3Prefix?: string,
     *     ExportOnly?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
