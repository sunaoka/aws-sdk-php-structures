<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataModel $DataModel
 * @property DataModelS3Configuration $DataModelS3Configuration
 */
class DataModelConfiguration extends Shape
{
    /**
     * @param array{
     *     DataModel?: DataModel,
     *     DataModelS3Configuration?: DataModelS3Configuration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
