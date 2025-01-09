<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RetryCriteria> $criteriaList
 */
class JobExecutionsRetryConfig extends Shape
{
    /**
     * @param array{criteriaList: list<RetryCriteria>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
