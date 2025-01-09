<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateComputer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputerId
 * @property string $ComputerName
 * @property list<Attribute> $ComputerAttributes
 */
class Computer extends Shape
{
    /**
     * @param array{
     *     ComputerId?: string,
     *     ComputerName?: string,
     *     ComputerAttributes?: list<Attribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
