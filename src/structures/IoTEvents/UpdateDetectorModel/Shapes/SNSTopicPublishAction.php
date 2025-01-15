<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetArn
 * @property Payload|null $payload
 */
class SNSTopicPublishAction extends Shape
{
    /**
     * @param array{
     *     targetArn: string,
     *     payload?: Payload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
