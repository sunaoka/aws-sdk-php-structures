<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'LEGACY'|'DEPRECATED'|'PREVIEW' $status
 */
class ModelLifecycle extends Shape
{
    /**
     * @param array{status: 'ACTIVE'|'LEGACY'|'DEPRECATED'|'PREVIEW'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
