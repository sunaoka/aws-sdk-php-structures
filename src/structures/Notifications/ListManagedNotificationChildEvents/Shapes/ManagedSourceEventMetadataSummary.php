<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationChildEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $eventOriginRegion
 * @property string $source
 * @property string $eventType
 */
class ManagedSourceEventMetadataSummary extends Shape
{
    /**
     * @param array{
     *     eventOriginRegion?: string|null,
     *     source: string,
     *     eventType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
