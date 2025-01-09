<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputDetail> $OutputDetails
 */
class OutputGroupDetail extends Shape
{
    /**
     * @param array{OutputDetails?: list<OutputDetail>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
