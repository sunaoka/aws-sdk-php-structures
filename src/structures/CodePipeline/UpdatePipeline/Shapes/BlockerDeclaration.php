<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'Schedule' $type
 */
class BlockerDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'Schedule'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
