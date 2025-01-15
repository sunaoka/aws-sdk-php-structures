<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Date
 * @property int|null $Days
 * @property string|null $StorageClass
 */
class AwsS3BucketBucketLifecycleConfigurationRulesTransitionsDetails extends Shape
{
    /**
     * @param array{
     *     Date?: string|null,
     *     Days?: int|null,
     *     StorageClass?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
