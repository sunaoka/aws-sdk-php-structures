<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $comparisonOutputLocation
 * @property 'Different'|'Equivalent'|'Equal' $comparisonStatus
 */
class CompareDatabaseCDCStepOutput extends Shape
{
    /**
     * @param array{
     *     comparisonOutputLocation: string,
     *     comparisonStatus: 'Different'|'Equivalent'|'Equal'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
