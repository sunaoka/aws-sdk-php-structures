<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateStorageSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerHostname
 * @property int $ServerPort
 */
class DiscoveryServerConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerHostname: string,
     *     ServerPort?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
