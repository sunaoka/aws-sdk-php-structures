<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ro'|'rw' $Permission
 * @property string $ResourceId
 */
class ResourceAccessPolicy extends Shape
{
    /**
     * @param array{
     *     Permission?: 'ro'|'rw',
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
