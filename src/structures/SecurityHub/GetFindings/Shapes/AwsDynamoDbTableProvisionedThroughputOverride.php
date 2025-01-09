<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReadCapacityUnits
 */
class AwsDynamoDbTableProvisionedThroughputOverride extends Shape
{
    /**
     * @param array{ReadCapacityUnits?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
