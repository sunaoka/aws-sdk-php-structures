<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ReadCapacityUnits
 */
class AwsDynamoDbTableProvisionedThroughputOverride extends Shape
{
    /**
     * @param array{ReadCapacityUnits?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
