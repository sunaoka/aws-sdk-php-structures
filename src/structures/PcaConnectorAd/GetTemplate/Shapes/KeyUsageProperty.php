<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyUsagePropertyFlags|null $PropertyFlags
 * @property 'ALL'|null $PropertyType
 */
class KeyUsageProperty extends Shape
{
    /**
     * @param array{
     *     PropertyFlags?: KeyUsagePropertyFlags|null,
     *     PropertyType?: 'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
