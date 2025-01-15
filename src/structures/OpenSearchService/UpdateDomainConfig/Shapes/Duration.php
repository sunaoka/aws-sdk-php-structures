<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 24>|null $Value
 * @property 'HOURS'|null $Unit
 */
class Duration extends Shape
{
    /**
     * @param array{
     *     Value?: int<1, 24>|null,
     *     Unit?: 'HOURS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
