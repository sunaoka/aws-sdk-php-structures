<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Date
 * @property int $Days
 * @property string $StorageClass
 */
class AwsS3BucketBucketLifecycleConfigurationRulesTransitionsDetails extends Shape
{
    /**
     * @param array{
     *     Date?: string,
     *     Days?: int,
     *     StorageClass?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
