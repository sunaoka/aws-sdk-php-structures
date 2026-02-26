<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetTopPathStatisticsByTraffic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BotCategory
 * @property string|null $BotOrganization
 * @property string|null $BotName
 */
class FilterSource extends Shape
{
    /**
     * @param array{
     *     BotCategory?: string|null,
     *     BotOrganization?: string|null,
     *     BotName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
