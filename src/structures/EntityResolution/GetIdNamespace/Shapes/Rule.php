<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetIdNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleName
 * @property list<string> $matchingKeys
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     ruleName: string,
     *     matchingKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
