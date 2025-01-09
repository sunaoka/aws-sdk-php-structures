<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $queueUrl
 * @property bool $useBase64
 * @property Payload $payload
 */
class SqsAction extends Shape
{
    /**
     * @param array{
     *     queueUrl: string,
     *     useBase64?: bool,
     *     payload?: Payload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
