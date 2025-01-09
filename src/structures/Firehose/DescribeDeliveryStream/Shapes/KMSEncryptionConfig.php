<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AWSKMSKeyARN
 */
class KMSEncryptionConfig extends Shape
{
    /**
     * @param array{AWSKMSKeyARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
