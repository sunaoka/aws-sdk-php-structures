<?php

namespace Sunaoka\Aws\Structures\Connect\ListDataTablePrimaryValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property list<string> $Values
 */
class PrimaryAttributeValueFilter extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
