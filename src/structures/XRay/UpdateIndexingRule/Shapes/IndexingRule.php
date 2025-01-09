<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateIndexingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property IndexingRuleValue $Rule
 */
class IndexingRule extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ModifiedAt?: \Aws\Api\DateTimeResult,
     *     Rule?: IndexingRuleValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
