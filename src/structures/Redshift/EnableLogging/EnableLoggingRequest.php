<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string|null $BucketName
 * @property string|null $S3KeyPrefix
 * @property 's3'|'cloudwatch'|'s3table'|null $LogDestinationType
 * @property list<string>|null $LogExports
 * @property string|null $S3TableKmsKeyId
 * @property string|null $S3TableGranularity
 */
class EnableLoggingRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     BucketName?: string|null,
     *     S3KeyPrefix?: string|null,
     *     LogDestinationType?: 's3'|'cloudwatch'|'s3table'|null,
     *     LogExports?: list<string>|null,
     *     S3TableKmsKeyId?: string|null,
     *     S3TableGranularity?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
