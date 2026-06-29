<?php

namespace Sunaoka\Aws\Structures\AppConfig\StopExperimentRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property array<string, AttributeValue>|null $AttributeValues
 */
class FlagValue extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     AttributeValues?: array<string, AttributeValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
