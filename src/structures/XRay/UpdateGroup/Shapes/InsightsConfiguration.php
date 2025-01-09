<?php

namespace Sunaoka\Aws\Structures\XRay\UpdateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $InsightsEnabled
 * @property bool $NotificationsEnabled
 */
class InsightsConfiguration extends Shape
{
    /**
     * @param array{
     *     InsightsEnabled?: bool,
     *     NotificationsEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
