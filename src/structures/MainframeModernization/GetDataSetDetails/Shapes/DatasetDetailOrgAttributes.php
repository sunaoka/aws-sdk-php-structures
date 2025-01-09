<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetDataSetDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GdgDetailAttributes $gdg
 * @property PoDetailAttributes $po
 * @property PsDetailAttributes $ps
 * @property VsamDetailAttributes $vsam
 */
class DatasetDetailOrgAttributes extends Shape
{
    /**
     * @param array{
     *     gdg?: GdgDetailAttributes,
     *     po?: PoDetailAttributes,
     *     ps?: PsDetailAttributes,
     *     vsam?: VsamDetailAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
