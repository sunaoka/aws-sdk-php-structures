<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $anyOf
 * @property list<string> $allOf
 */
class StepAttributeCapability extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     anyOf?: list<string>,
     *     allOf?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
