<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Days
 * @property string|null $StorageClass
 */
class AwsS3BucketBucketLifecycleConfigurationRulesNoncurrentVersionTransitionsDetails extends Shape
{
    /**
     * @param array{
     *     Days?: int|null,
     *     StorageClass?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
