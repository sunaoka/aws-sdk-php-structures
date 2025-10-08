<?php

namespace Sunaoka\Aws\Structures\S3Control\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyArn
 * @property bool|null $BucketKeyEnabled
 */
class SSEKMSFilter extends Shape
{
    /**
     * @param array{
     *     KmsKeyArn?: string|null,
     *     BucketKeyEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
