<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectivityProperties|null $connectivityProperties
 * @property string $snowflakeRole
 * @property IdentityMapping $identityMapping
 * @property LineageSyncInput|null $lineageSync
 */
class SnowflakePropertiesInput extends Shape
{
    /**
     * @param array{
     *     connectivityProperties?: ConnectivityProperties|null,
     *     snowflakeRole: string,
     *     identityMapping: IdentityMapping,
     *     lineageSync?: LineageSyncInput|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
