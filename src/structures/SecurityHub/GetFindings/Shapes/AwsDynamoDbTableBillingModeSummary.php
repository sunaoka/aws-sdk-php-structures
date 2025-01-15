<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BillingMode
 * @property string|null $LastUpdateToPayPerRequestDateTime
 */
class AwsDynamoDbTableBillingModeSummary extends Shape
{
    /**
     * @param array{
     *     BillingMode?: string|null,
     *     LastUpdateToPayPerRequestDateTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
