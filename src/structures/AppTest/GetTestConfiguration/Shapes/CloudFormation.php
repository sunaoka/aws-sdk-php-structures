<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $templateLocation
 * @property array<string, string> $parameters
 */
class CloudFormation extends Shape
{
    /**
     * @param array{
     *     templateLocation: string,
     *     parameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
