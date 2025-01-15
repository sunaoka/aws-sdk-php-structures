<?php

namespace Sunaoka\Aws\Structures\S3\PutBucketAnalyticsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Id
 * @property Shapes\AnalyticsConfiguration $AnalyticsConfiguration
 * @property string|null $ExpectedBucketOwner
 */
class PutBucketAnalyticsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Id: string,
     *     AnalyticsConfiguration: Shapes\AnalyticsConfiguration,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
