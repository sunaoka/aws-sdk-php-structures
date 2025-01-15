<?php

namespace Sunaoka\Aws\Structures\XRay\CreateGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $InsightsEnabled
 * @property bool|null $NotificationsEnabled
 */
class InsightsConfiguration extends Shape
{
    /**
     * @param array{
     *     InsightsEnabled?: bool|null,
     *     NotificationsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
