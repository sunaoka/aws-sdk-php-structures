<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionArn
 * @property Payload $payload
 */
class LambdaAction extends Shape
{
    /**
     * @param array{
     *     functionArn: string,
     *     payload?: Payload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
