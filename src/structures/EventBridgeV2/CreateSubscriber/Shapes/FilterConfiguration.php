<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EVENT_BRIDGE_PATTERN'|null $Language
 * @property list<Filter>|null $Filters
 */
class FilterConfiguration extends Shape
{
    /**
     * @param array{
     *     Language?: 'EVENT_BRIDGE_PATTERN'|null,
     *     Filters?: list<Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
