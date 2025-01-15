<?php

namespace Sunaoka\Aws\Structures\Lambda\ListVersionsByFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $EntryPoint
 * @property list<string>|null $Command
 * @property string|null $WorkingDirectory
 */
class ImageConfig extends Shape
{
    /**
     * @param array{
     *     EntryPoint?: list<string>|null,
     *     Command?: list<string>|null,
     *     WorkingDirectory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
