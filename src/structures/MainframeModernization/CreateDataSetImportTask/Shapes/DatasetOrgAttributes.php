<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GdgAttributes $gdg
 * @property PoAttributes $po
 * @property PsAttributes $ps
 * @property VsamAttributes $vsam
 */
class DatasetOrgAttributes extends Shape
{
    /**
     * @param array{
     *     gdg?: GdgAttributes,
     *     po?: PoAttributes,
     *     ps?: PsAttributes,
     *     vsam?: VsamAttributes
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
