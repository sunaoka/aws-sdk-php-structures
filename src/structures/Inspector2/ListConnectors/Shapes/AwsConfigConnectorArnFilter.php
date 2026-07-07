<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property string $value
 */
class AwsConfigConnectorArnFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
