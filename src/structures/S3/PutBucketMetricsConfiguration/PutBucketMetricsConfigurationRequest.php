<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketMetricsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Id
 * @property Shapes\MetricsConfiguration $MetricsConfiguration
 * @property string $ExpectedBucketOwner
 */
class PutBucketMetricsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Id: string,
     *     MetricsConfiguration: Shapes\MetricsConfiguration,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
