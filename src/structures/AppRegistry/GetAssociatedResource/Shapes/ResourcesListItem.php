<?php

namespace Sunaoka\Aws\Structures\AppRegistry\GetAssociatedResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceArn
 * @property string $errorMessage
 * @property string $status
 * @property string $resourceType
 */
class ResourcesListItem extends Shape
{
    /**
     * @param array{
     *     resourceArn?: string,
     *     errorMessage?: string,
     *     status?: string,
     *     resourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
