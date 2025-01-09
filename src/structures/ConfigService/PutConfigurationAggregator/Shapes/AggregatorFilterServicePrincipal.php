<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationAggregator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE' $Type
 * @property list<string> $Value
 */
class AggregatorFilterServicePrincipal extends Shape
{
    /**
     * @param array{
     *     Type?: 'INCLUDE',
     *     Value?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
