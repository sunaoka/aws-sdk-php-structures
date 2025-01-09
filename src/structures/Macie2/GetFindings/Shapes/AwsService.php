<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invokedBy
 */
class AwsService extends Shape
{
    /**
     * @param array{invokedBy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
