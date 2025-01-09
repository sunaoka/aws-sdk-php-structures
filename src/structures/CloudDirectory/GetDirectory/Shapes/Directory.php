<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\GetDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $DirectoryArn
 * @property 'ENABLED'|'DISABLED'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 */
class Directory extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     DirectoryArn?: string,
     *     State?: 'ENABLED'|'DISABLED'|'DELETED',
     *     CreationDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
