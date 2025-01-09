<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeDeliveryChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $s3BucketName
 * @property string $s3KeyPrefix
 * @property string $s3KmsKeyArn
 * @property string $snsTopicARN
 * @property ConfigSnapshotDeliveryProperties $configSnapshotDeliveryProperties
 */
class DeliveryChannel extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     s3BucketName?: string,
     *     s3KeyPrefix?: string,
     *     s3KmsKeyArn?: string,
     *     snsTopicARN?: string,
     *     configSnapshotDeliveryProperties?: ConfigSnapshotDeliveryProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
