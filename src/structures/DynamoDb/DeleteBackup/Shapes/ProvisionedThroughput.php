<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $ReadCapacityUnits
 * @property int<1, max> $WriteCapacityUnits
 */
class ProvisionedThroughput extends Shape
{
    /**
     * @param array{
     *     ReadCapacityUnits: int<1, max>,
     *     WriteCapacityUnits: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
