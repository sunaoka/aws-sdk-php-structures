<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allOf
 * @property list<string>|null $anyOf
 * @property string $name
 */
class StepAttributeCapability extends Shape
{
    /**
     * @param array{
     *     allOf?: list<string>|null,
     *     anyOf?: list<string>|null,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
