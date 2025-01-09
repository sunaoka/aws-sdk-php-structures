<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReportS3Configuration $ReportS3Configuration
 */
class ReportConfiguration extends Shape
{
    /**
     * @param array{ReportS3Configuration?: ReportS3Configuration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
