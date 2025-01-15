<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateApplicationLayerAutomaticResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlockAction|null $Block
 * @property CountAction|null $Count
 */
class ResponseAction extends Shape
{
    /**
     * @param array{
     *     Block?: BlockAction|null,
     *     Count?: CountAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
