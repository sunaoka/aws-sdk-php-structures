<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateStorageSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerHostname
 * @property int<1, 65535>|null $ServerPort
 */
class DiscoveryServerConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerHostname: string,
     *     ServerPort?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
