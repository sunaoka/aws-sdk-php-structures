<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $DirectoryArn
 * @property 'ENABLED'|'DISABLED'|'DELETED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 */
class Directory extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     DirectoryArn?: string|null,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED'|null,
     *     CreationDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
