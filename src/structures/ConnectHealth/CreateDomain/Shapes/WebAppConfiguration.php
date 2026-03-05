<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ehrRole
 * @property string $idcApplicationId
 * @property string $idcRegion
 */
class WebAppConfiguration extends Shape
{
    /**
     * @param array{
     *     ehrRole: string,
     *     idcApplicationId: string,
     *     idcRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
