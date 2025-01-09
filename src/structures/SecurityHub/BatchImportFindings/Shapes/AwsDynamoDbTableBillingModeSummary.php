<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BillingMode
 * @property string $LastUpdateToPayPerRequestDateTime
 */
class AwsDynamoDbTableBillingModeSummary extends Shape
{
    /**
     * @param array{
     *     BillingMode?: string,
     *     LastUpdateToPayPerRequestDateTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
