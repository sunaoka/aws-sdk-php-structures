<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OutputDetail>|null $OutputDetails
 */
class OutputGroupDetail extends Shape
{
    /**
     * @param array{OutputDetails?: list<OutputDetail>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
