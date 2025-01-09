<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TestingData $Input
 * @property TestingData $Output
 * @property ValidationData $Validation
 */
class TestingDataResult extends Shape
{
    /**
     * @param array{
     *     Input?: TestingData,
     *     Output?: TestingData,
     *     Validation?: ValidationData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
