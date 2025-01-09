<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CreateElasticsearchDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 24> $Value
 * @property 'HOURS' $Unit
 */
class Duration extends Shape
{
    /**
     * @param array{
     *     Value?: int<1, 24>,
     *     Unit?: 'HOURS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
