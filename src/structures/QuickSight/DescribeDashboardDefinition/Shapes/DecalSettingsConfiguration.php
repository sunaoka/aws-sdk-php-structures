<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DecalSettings>|null $CustomDecalSettings
 */
class DecalSettingsConfiguration extends Shape
{
    /**
     * @param array{CustomDecalSettings?: list<DecalSettings>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
