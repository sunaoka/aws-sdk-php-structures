<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $s3BucketName
 * @property string|null $s3KeyPrefix
 * @property string|null $s3KmsKeyArn
 * @property string|null $snsTopicARN
 * @property ConfigSnapshotDeliveryProperties|null $configSnapshotDeliveryProperties
 */
class DeliveryChannel extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     s3BucketName?: string|null,
     *     s3KeyPrefix?: string|null,
     *     s3KmsKeyArn?: string|null,
     *     snsTopicARN?: string|null,
     *     configSnapshotDeliveryProperties?: ConfigSnapshotDeliveryProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
