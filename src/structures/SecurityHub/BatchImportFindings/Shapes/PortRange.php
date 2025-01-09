<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Begin
 * @property int $End
 */
class PortRange extends Shape
{
    /**
     * @param array{
     *     Begin?: int,
     *     End?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
