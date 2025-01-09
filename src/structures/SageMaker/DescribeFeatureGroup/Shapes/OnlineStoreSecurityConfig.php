<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeFeatureGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 */
class OnlineStoreSecurityConfig extends Shape
{
    /**
     * @param array{KmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
