<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CompareDataSetsSummary|null $datasets
 * @property CompareDatabaseCDCSummary|null $databaseCDC
 */
class CompareFileType extends Shape
{
    /**
     * @param array{
     *     datasets?: CompareDataSetsSummary|null,
     *     databaseCDC?: CompareDatabaseCDCSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
