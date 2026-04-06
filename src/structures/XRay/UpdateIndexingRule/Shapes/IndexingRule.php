<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateIndexingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property IndexingRuleValue|null $Rule
 */
class IndexingRule extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     Rule?: IndexingRuleValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
