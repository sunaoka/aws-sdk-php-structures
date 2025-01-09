<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 * @property string $BucketName
 * @property string $ObjectKeyPrefix
 * @property string $KmsKeyArn
 * @property string $IamRoleArn
 */
class S3Action extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string,
     *     BucketName: string,
     *     ObjectKeyPrefix?: string,
     *     KmsKeyArn?: string,
     *     IamRoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
