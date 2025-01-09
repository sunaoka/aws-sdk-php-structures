<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartContentModeration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SNSTopicArn
 * @property string $RoleArn
 */
class NotificationChannel extends Shape
{
    /**
     * @param array{
     *     SNSTopicArn: string,
     *     RoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
