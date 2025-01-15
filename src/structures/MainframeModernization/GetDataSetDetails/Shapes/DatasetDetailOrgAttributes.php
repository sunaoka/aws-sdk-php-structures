<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GdgDetailAttributes|null $gdg
 * @property PoDetailAttributes|null $po
 * @property PsDetailAttributes|null $ps
 * @property VsamDetailAttributes|null $vsam
 */
class DatasetDetailOrgAttributes extends Shape
{
    /**
     * @param array{
     *     gdg?: GdgDetailAttributes|null,
     *     po?: PoDetailAttributes|null,
     *     ps?: PsDetailAttributes|null,
     *     vsam?: VsamDetailAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
