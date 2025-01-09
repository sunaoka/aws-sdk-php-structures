<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ConnectionType
 * @property array<string, string> $Data
 * @property list<string> $Inputs
 */
class ConnectorDataTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     ConnectionType: string,
     *     Data: array<string, string>,
     *     Inputs?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
