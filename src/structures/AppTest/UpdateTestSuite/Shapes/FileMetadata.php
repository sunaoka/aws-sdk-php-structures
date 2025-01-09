<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSet> $dataSets
 * @property DatabaseCDC $databaseCDC
 */
class FileMetadata extends Shape
{
    /**
     * @param array{
     *     dataSets?: list<DataSet>,
     *     databaseCDC?: DatabaseCDC
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
