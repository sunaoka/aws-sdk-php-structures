<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $EntryPoint
 * @property list<string> $Command
 * @property string $WorkingDirectory
 */
class ImageConfig extends Shape
{
    /**
     * @param array{
     *     EntryPoint?: list<string>,
     *     Command?: list<string>,
     *     WorkingDirectory?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
