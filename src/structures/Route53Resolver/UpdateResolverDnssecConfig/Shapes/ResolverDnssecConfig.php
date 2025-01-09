<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverDnssecConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $OwnerId
 * @property string $ResourceId
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING_TO_USE_LOCAL_RESOURCE_SETTING'|'USE_LOCAL_RESOURCE_SETTING' $ValidationStatus
 */
class ResolverDnssecConfig extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     OwnerId?: string,
     *     ResourceId?: string,
     *     ValidationStatus?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING_TO_USE_LOCAL_RESOURCE_SETTING'|'USE_LOCAL_RESOURCE_SETTING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
