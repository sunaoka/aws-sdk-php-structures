<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ehrRole
 * @property string $idcInstanceId
 * @property string $idcRegion
 */
class CreateWebAppConfiguration extends Shape
{
    /**
     * @param array{
     *     ehrRole: string,
     *     idcInstanceId: string,
     *     idcRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
