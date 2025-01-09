<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Value
 * @property 'HOURS' $Unit
 */
class Duration extends Shape
{
    /**
     * @param array{
     *     Value?: int,
     *     Unit?: 'HOURS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
