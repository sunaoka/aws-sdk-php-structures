<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $headline
 */
class MessageComponentsSummary extends Shape
{
    /**
     * @param array{headline: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
