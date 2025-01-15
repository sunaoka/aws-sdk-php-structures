<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ro'|'rw'|null $Permission
 * @property string $ResourceId
 */
class ResourceAccessPolicy extends Shape
{
    /**
     * @param array{
     *     Permission?: 'ro'|'rw'|null,
     *     ResourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
