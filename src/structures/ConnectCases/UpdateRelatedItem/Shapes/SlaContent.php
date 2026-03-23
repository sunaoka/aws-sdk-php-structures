<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlaConfiguration $slaConfiguration
 */
class SlaContent extends Shape
{
    /**
     * @param array{slaConfiguration: SlaConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
