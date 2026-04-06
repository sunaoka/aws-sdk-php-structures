<?php

namespace Sunaoka\Aws\Structures\Evs\DeleteEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vCenter
 * @property string $nsx
 * @property string $nsxManager1
 * @property string $nsxManager2
 * @property string $nsxManager3
 * @property string $nsxEdge1
 * @property string $nsxEdge2
 * @property string $sddcManager
 * @property string $cloudBuilder
 */
class VcfHostnames extends Shape
{
    /**
     * @param array{
     *     vCenter: string,
     *     nsx: string,
     *     nsxManager1: string,
     *     nsxManager2: string,
     *     nsxManager3: string,
     *     nsxEdge1: string,
     *     nsxEdge2: string,
     *     sddcManager: string,
     *     cloudBuilder: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
