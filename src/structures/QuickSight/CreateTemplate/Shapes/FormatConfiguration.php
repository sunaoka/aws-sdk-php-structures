<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringFormatConfiguration $StringFormatConfiguration
 * @property NumberFormatConfiguration $NumberFormatConfiguration
 * @property DateTimeFormatConfiguration $DateTimeFormatConfiguration
 */
class FormatConfiguration extends Shape
{
    /**
     * @param array{
     *     StringFormatConfiguration?: StringFormatConfiguration,
     *     NumberFormatConfiguration?: NumberFormatConfiguration,
     *     DateTimeFormatConfiguration?: DateTimeFormatConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
