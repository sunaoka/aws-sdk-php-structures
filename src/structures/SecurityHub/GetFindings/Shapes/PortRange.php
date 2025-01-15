<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Begin
 * @property int|null $End
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     Begin?: int|null,
     *     End?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
