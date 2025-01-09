<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsJobAbortCriteria> $abortCriteriaList
 */
class AwsJobAbortConfig extends Shape
{
    /**
     * @param array{abortCriteriaList: list<AwsJobAbortCriteria>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
