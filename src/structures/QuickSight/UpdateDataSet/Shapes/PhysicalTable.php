<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelationalTable|null $RelationalTable
 * @property CustomSql|null $CustomSql
 * @property S3Source|null $S3Source
 * @property SaaSTable|null $SaaSTable
 * @property FileSource|null $FileSource
 */
class PhysicalTable extends Shape
{
    /**
     * @param array{
     *     RelationalTable?: RelationalTable|null,
     *     CustomSql?: CustomSql|null,
     *     S3Source?: S3Source|null,
     *     SaaSTable?: SaaSTable|null,
     *     FileSource?: FileSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
