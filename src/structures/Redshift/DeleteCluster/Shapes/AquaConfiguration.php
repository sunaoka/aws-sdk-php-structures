<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|'applying'|null $AquaStatus
 * @property 'enabled'|'disabled'|'auto'|null $AquaConfigurationStatus
 */
class AquaConfiguration extends Shape
{
    /**
     * @param array{
     *     AquaStatus?: 'enabled'|'disabled'|'applying'|null,
     *     AquaConfigurationStatus?: 'enabled'|'disabled'|'auto'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
