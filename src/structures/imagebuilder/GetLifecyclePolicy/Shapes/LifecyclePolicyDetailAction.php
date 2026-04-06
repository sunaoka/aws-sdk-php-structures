<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DELETE'|'DEPRECATE'|'DISABLE' $type
 * @property LifecyclePolicyDetailActionIncludeResources|null $includeResources
 */
class LifecyclePolicyDetailAction extends Shape
{
    /**
     * @param array{
     *     type: 'DELETE'|'DEPRECATE'|'DISABLE',
     *     includeResources?: LifecyclePolicyDetailActionIncludeResources|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
