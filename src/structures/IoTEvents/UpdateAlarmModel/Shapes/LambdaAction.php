<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionArn
 * @property Payload|null $payload
 */
class LambdaAction extends Shape
{
    /**
     * @param array{
     *     functionArn: string,
     *     payload?: Payload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
