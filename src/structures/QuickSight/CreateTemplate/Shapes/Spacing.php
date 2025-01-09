<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Top
 * @property string $Bottom
 * @property string $Left
 * @property string $Right
 */
class Spacing extends Shape
{
    /**
     * @param array{
     *     Top?: string,
     *     Bottom?: string,
     *     Left?: string,
     *     Right?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
