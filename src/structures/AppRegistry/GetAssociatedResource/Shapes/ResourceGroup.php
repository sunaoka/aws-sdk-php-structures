<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_COMPLETE'|'UPDATE_FAILED' $state
 * @property string $arn
 * @property string $errorMessage
 */
class ResourceGroup extends Shape
{
    /**
     * @param array{
     *     state?: 'CREATING'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_COMPLETE'|'UPDATE_FAILED',
     *     arn?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
