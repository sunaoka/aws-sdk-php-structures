<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListSuggestedResiliencyPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $rpoInSecs
 * @property int<0, max> $rtoInSecs
 */
class FailurePolicy extends Shape
{
    /**
     * @param array{
     *     rpoInSecs: int<0, max>,
     *     rtoInSecs: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
