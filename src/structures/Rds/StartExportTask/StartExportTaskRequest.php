<?php

namespace Sunaoka\Aws\Structures\Rds\StartExportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExportTaskIdentifier
 * @property string $SourceArn
 * @property string $S3BucketName
 * @property string $IamRoleArn
 * @property string $KmsKeyId
 * @property string|null $S3Prefix
 * @property list<string>|null $ExportOnly
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
     *     S3Prefix?: string|null,
     *     ExportOnly?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
