<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationAggregator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUDE'|null $Type
 * @property list<string>|null $Value
 */
class AggregatorFilterResourceType extends Shape
{
    /**
     * @param array{
     *     Type?: 'INCLUDE'|null,
     *     Value?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
