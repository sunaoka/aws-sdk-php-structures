<?php

namespace Sunaoka\Aws\Structures\IoTEvents\StartDetectorModelAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property Payload|null $payload
 */
class DynamoDBv2Action extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     payload?: Payload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
