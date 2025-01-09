<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetArn
 * @property Payload $payload
 */
class SNSTopicPublishAction extends Shape
{
    /**
     * @param array{
     *     targetArn: string,
     *     payload?: Payload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
