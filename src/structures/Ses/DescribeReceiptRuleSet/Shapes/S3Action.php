<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 * @property string $BucketName
 * @property string|null $ObjectKeyPrefix
 * @property string|null $KmsKeyArn
 * @property string|null $IamRoleArn
 */
class S3Action extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string|null,
     *     BucketName: string,
     *     ObjectKeyPrefix?: string|null,
     *     KmsKeyArn?: string|null,
     *     IamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
