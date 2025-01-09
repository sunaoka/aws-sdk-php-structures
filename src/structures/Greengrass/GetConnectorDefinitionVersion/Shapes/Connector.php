<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetConnectorDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConnectorArn
 * @property string $Id
 * @property array<string, string> $Parameters
 */
class Connector extends Shape
{
    /**
     * @param array{
     *     ConnectorArn: string,
     *     Id: string,
     *     Parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
