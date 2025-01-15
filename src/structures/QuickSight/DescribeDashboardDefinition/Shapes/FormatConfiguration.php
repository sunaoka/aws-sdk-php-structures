<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StringFormatConfiguration|null $StringFormatConfiguration
 * @property NumberFormatConfiguration|null $NumberFormatConfiguration
 * @property DateTimeFormatConfiguration|null $DateTimeFormatConfiguration
 */
class FormatConfiguration extends Shape
{
    /**
     * @param array{
     *     StringFormatConfiguration?: StringFormatConfiguration|null,
     *     NumberFormatConfiguration?: NumberFormatConfiguration|null,
     *     DateTimeFormatConfiguration?: DateTimeFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
