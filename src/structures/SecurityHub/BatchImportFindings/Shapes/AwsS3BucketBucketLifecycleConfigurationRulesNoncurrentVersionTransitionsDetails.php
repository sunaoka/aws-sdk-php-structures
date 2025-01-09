<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Days
 * @property string $StorageClass
 */
class AwsS3BucketBucketLifecycleConfigurationRulesNoncurrentVersionTransitionsDetails extends Shape
{
    /**
     * @param array{
     *     Days?: int,
     *     StorageClass?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
