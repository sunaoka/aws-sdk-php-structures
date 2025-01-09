<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteIndexField\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IndexField $Options
 * @property OptionStatus $Status
 */
class IndexFieldStatus extends Shape
{
    /**
     * @param array{
     *     Options: IndexField,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
