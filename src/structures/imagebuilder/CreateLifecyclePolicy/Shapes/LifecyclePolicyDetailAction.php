<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DELETE'|'DEPRECATE'|'DISABLE' $type
 * @property LifecyclePolicyDetailActionIncludeResources $includeResources
 */
class LifecyclePolicyDetailAction extends Shape
{
    /**
     * @param array{
     *     type: 'DELETE'|'DEPRECATE'|'DISABLE',
     *     includeResources?: LifecyclePolicyDetailActionIncludeResources
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
