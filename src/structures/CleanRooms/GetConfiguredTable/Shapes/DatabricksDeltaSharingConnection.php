<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deltaShareEndpoint
 * @property string $shareName
 */
class DatabricksDeltaSharingConnection extends Shape
{
    /**
     * @param array{
     *     deltaShareEndpoint: string,
     *     shareName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
