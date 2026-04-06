<?php

namespace Sunaoka\Aws\Structures\EntityResolution\UpdateIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $matchingKeys
 * @property string $ruleName
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     matchingKeys: list<string>,
     *     ruleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
