<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeocoderHierarchy $RequestKey
 * @property GeocodePreferenceValue $Preference
 */
class GeocodePreference extends Shape
{
    /**
     * @param array{
     *     RequestKey: GeocoderHierarchy,
     *     Preference: GeocodePreferenceValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
