<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataModel|null $DataModel
 * @property DataModelS3Configuration|null $DataModelS3Configuration
 */
class DataModelConfiguration extends Shape
{
    /**
     * @param array{
     *     DataModel?: DataModel|null,
     *     DataModelS3Configuration?: DataModelS3Configuration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
