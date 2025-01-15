<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateDataSetImportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GdgAttributes|null $gdg
 * @property PoAttributes|null $po
 * @property PsAttributes|null $ps
 * @property VsamAttributes|null $vsam
 */
class DatasetOrgAttributes extends Shape
{
    /**
     * @param array{
     *     gdg?: GdgAttributes|null,
     *     po?: PoAttributes|null,
     *     ps?: PsAttributes|null,
     *     vsam?: VsamAttributes|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
