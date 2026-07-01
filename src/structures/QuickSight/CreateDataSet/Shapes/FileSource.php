<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceArn
 * @property UploadSettings|null $UploadSettings
 * @property int $SheetIndex
 * @property list<InputColumn> $InputColumns
 */
class FileSource extends Shape
{
    /**
     * @param array{
     *     DataSourceArn: string,
     *     UploadSettings?: UploadSettings|null,
     *     SheetIndex: int,
     *     InputColumns: list<InputColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
