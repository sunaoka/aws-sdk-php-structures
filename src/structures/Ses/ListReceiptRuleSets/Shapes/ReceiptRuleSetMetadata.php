<?php

namespace Sunaoka\Aws\Structures\Ses\ListReceiptRuleSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 */
class ReceiptRuleSetMetadata extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
