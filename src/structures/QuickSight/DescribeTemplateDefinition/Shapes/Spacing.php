<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Top
 * @property string|null $Bottom
 * @property string|null $Left
 * @property string|null $Right
 */
class Spacing extends Shape
{
    /**
     * @param array{
     *     Top?: string|null,
     *     Bottom?: string|null,
     *     Left?: string|null,
     *     Right?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
