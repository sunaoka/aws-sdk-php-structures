<?php

namespace Sunaoka\Aws\Structures\Redshift\FailoverPrimaryCompute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'enabled'|'disabled'|'applying' $AquaStatus
 * @property 'enabled'|'disabled'|'auto' $AquaConfigurationStatus
 */
class AquaConfiguration extends Shape
{
    /**
     * @param array{
     *     AquaStatus?: 'enabled'|'disabled'|'applying',
     *     AquaConfigurationStatus?: 'enabled'|'disabled'|'auto'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
