<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RAW'|'WITH_METADATA'|'JSONATA'|null $Type
 * @property JsonataConfiguration|null $JsonataConfiguration
 */
class Transformer extends Shape
{
    /**
     * @param array{
     *     Type?: 'RAW'|'WITH_METADATA'|'JSONATA'|null,
     *     JsonataConfiguration?: JsonataConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
