<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SelfGrantStatusDetail> $selfGrantStatusDetails
 */
class RedshiftSelfGrantStatusOutput extends Shape
{
    /**
     * @param array{selfGrantStatusDetails: list<SelfGrantStatusDetail>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
