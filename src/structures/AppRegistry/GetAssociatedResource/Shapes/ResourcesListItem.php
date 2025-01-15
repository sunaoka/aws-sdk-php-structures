<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceArn
 * @property string|null $errorMessage
 * @property string|null $status
 * @property string|null $resourceType
 */
class ResourcesListItem extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string|null,
     *     errorMessage?: string|null,
     *     status?: string|null,
     *     resourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
