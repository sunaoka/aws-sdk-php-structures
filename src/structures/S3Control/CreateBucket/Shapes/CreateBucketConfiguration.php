<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EU'|'eu-west-1'|'us-west-1'|'us-west-2'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'|'cn-north-1'|'eu-central-1'|null $LocationConstraint
 */
class CreateBucketConfiguration extends Shape
{
    /**
     * @param array{LocationConstraint?: 'EU'|'eu-west-1'|'us-west-1'|'us-west-2'|'ap-south-1'|'ap-southeast-1'|'ap-southeast-2'|'ap-northeast-1'|'sa-east-1'|'cn-north-1'|'eu-central-1'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
