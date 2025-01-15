<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListNotifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LENS_VERSION_UPGRADED'|'LENS_VERSION_DEPRECATED'|null $Type
 * @property LensUpgradeSummary|null $LensUpgradeSummary
 */
class NotificationSummary extends Shape
{
    /**
     * @param array{
     *     Type?: 'LENS_VERSION_UPGRADED'|'LENS_VERSION_DEPRECATED'|null,
     *     LensUpgradeSummary?: LensUpgradeSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
