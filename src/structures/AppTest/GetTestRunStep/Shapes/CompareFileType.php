<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CompareDataSetsSummary $datasets
 * @property CompareDatabaseCDCSummary $databaseCDC
 */
class CompareFileType extends Shape
{
    /**
     * @param array{
     *     datasets?: CompareDataSetsSummary,
     *     databaseCDC?: CompareDatabaseCDCSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
