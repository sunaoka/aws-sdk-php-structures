<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sourceLocation
 * @property string $targetLocation
 * @property list<DataSet> $sourceDataSets
 * @property list<DataSet> $targetDataSets
 */
class CompareDataSetsStepInput extends Shape
{
    /**
     * @param array{
     *     sourceLocation: string,
     *     targetLocation: string,
     *     sourceDataSets: list<DataSet>,
     *     targetDataSets: list<DataSet>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
