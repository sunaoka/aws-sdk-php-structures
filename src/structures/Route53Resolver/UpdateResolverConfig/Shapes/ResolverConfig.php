<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $ResourceId
 * @property string|null $OwnerId
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING_TO_USE_LOCAL_RESOURCE_SETTING'|'USE_LOCAL_RESOURCE_SETTING'|null $AutodefinedReverse
 */
class ResolverConfig extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     ResourceId?: string|null,
     *     OwnerId?: string|null,
     *     AutodefinedReverse?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING_TO_USE_LOCAL_RESOURCE_SETTING'|'USE_LOCAL_RESOURCE_SETTING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
