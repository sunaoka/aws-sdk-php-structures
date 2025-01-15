<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestSuite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataSet>|null $dataSets
 * @property DatabaseCDC|null $databaseCDC
 */
class FileMetadata extends Shape
{
    /**
     * @param array{
     *     dataSets?: list<DataSet>|null,
     *     databaseCDC?: DatabaseCDC|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
