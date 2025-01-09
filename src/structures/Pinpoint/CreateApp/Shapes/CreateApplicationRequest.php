<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property array<string, string> $tags
 */
class CreateApplicationRequest extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
