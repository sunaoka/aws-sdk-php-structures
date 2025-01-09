<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ResourceId
 * @property string $OwnerId
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING_TO_USE_LOCAL_RESOURCE_SETTING'|'USE_LOCAL_RESOURCE_SETTING' $AutodefinedReverse
 */
class ResolverConfig extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     ResourceId?: string,
     *     OwnerId?: string,
     *     AutodefinedReverse?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING_TO_USE_LOCAL_RESOURCE_SETTING'|'USE_LOCAL_RESOURCE_SETTING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
