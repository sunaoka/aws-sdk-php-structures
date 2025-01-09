<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KeyUsagePropertyFlags $PropertyFlags
 * @property 'ALL' $PropertyType
 */
class KeyUsageProperty extends Shape
{
    /**
     * @param array{
     *     PropertyFlags?: KeyUsagePropertyFlags,
     *     PropertyType?: 'ALL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
