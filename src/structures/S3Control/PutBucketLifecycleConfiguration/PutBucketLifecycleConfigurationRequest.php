<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketLifecycleConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Bucket
 * @property Shapes\LifecycleConfiguration $LifecycleConfiguration
 */
class PutBucketLifecycleConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Bucket: string,
     *     LifecycleConfiguration?: Shapes\LifecycleConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
