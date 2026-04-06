<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SlaInputConfiguration|null $slaInputConfiguration
 */
class SlaInputContent extends Shape
{
    /**
     * @param array{slaInputConfiguration?: SlaInputConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
