<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceArn
 * @property UploadSettings $UploadSettings
 * @property list<InputColumn> $InputColumns
 */
class S3Source extends Shape
{
    /**
     * @param array{
     *     DataSourceArn: string,
     *     UploadSettings?: UploadSettings,
     *     InputColumns: list<InputColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
