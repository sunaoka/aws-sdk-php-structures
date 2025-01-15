<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null $state
 * @property string|null $arn
 * @property string|null $errorMessage
 */
class ResourceGroup extends Shape
{
    /**
     * @param array{
     *     state?: 'CREATING'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATING'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null,
     *     arn?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
