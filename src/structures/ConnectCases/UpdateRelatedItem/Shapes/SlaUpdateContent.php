<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlaUpdateConfiguration|null $slaUpdateConfiguration
 */
class SlaUpdateContent extends Shape
{
    /**
     * @param array{slaUpdateConfiguration?: SlaUpdateConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
