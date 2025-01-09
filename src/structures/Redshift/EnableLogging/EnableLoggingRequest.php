<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $BucketName
 * @property string $S3KeyPrefix
 * @property 's3'|'cloudwatch' $LogDestinationType
 * @property list<string> $LogExports
 */
class EnableLoggingRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     BucketName?: string,
     *     S3KeyPrefix?: string,
     *     LogDestinationType?: 's3'|'cloudwatch',
     *     LogExports?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
