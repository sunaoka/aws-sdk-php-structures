<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED_ACTIONS'|'ALL_ACTIONS'|null $retryMode
 */
class RetryConfiguration extends Shape
{
    /**
     * @param array{retryMode?: 'FAILED_ACTIONS'|'ALL_ACTIONS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
