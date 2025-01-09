<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SNSTopicArn
 */
class StreamProcessorNotificationChannel extends Shape
{
    /**
     * @param array{SNSTopicArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
