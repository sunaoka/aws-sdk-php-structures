<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string>|null $anyOf
 * @property list<string>|null $allOf
 */
class StepAttributeCapability extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     anyOf?: list<string>|null,
     *     allOf?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
