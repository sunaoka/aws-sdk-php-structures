<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Pattern
 * @property 'DATA'|'METADATA'|'SYSTEM_METADATA' $Scope
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     Pattern: string,
     *     Scope: 'DATA'|'METADATA'|'SYSTEM_METADATA'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
