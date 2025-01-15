<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetLogDeliveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BucketArn
 */
class S3ConfigurationType extends Shape
{
    /**
     * @param array{BucketArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
