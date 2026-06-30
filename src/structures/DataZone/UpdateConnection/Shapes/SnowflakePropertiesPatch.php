<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectivityPropertiesPatch|null $connectivityPropertiesPatch
 * @property string|null $snowflakeRole
 * @property LineageSyncInput|null $lineageSync
 */
class SnowflakePropertiesPatch extends Shape
{
    /**
     * @param array{
     *     connectivityPropertiesPatch?: ConnectivityPropertiesPatch|null,
     *     snowflakeRole?: string|null,
     *     lineageSync?: LineageSyncInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
