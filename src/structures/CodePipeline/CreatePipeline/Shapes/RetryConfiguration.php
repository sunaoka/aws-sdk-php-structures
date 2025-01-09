<?php

namespace Sunaoka\Aws\Structures\CodePipeline\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED_ACTIONS'|'ALL_ACTIONS' $retryMode
 */
class RetryConfiguration extends Shape
{
    /**
     * @param array{retryMode?: 'FAILED_ACTIONS'|'ALL_ACTIONS'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
