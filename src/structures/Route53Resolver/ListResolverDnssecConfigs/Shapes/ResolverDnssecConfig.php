<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverDnssecConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $OwnerId
 * @property string|null $ResourceId
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING_TO_USE_LOCAL_RESOURCE_SETTING'|'USE_LOCAL_RESOURCE_SETTING'|null $ValidationStatus
 */
class ResolverDnssecConfig extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     OwnerId?: string|null,
     *     ResourceId?: string|null,
     *     ValidationStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING_TO_USE_LOCAL_RESOURCE_SETTING'|'USE_LOCAL_RESOURCE_SETTING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
