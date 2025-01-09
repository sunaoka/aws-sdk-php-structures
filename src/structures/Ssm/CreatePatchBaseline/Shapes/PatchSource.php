<?php

namespace Sunaoka\Aws\Structures\Ssm\CreatePatchBaseline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Products
 * @property string $Configuration
 */
class PatchSource extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Products: list<string>,
     *     Configuration: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
