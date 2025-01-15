<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TestingData|null $Input
 * @property TestingData|null $Output
 * @property ValidationData|null $Validation
 */
class TestingDataResult extends Shape
{
    /**
     * @param array{
     *     Input?: TestingData|null,
     *     Output?: TestingData|null,
     *     Validation?: ValidationData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
