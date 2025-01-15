<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateComputer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ComputerId
 * @property string|null $ComputerName
 * @property list<Attribute>|null $ComputerAttributes
 */
class Computer extends Shape
{
    /**
     * @param array{
     *     ComputerId?: string|null,
     *     ComputerName?: string|null,
     *     ComputerAttributes?: list<Attribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
