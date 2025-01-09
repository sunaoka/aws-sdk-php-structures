<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResiliencyPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $rpoInSecs
 * @property int $rtoInSecs
 */
class FailurePolicy extends Shape
{
    /**
     * @param array{
     *     rpoInSecs: int,
     *     rtoInSecs: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
