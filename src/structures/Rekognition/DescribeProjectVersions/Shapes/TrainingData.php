<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Asset> $Assets
 */
class TrainingData extends Shape
{
    /**
     * @param array{Assets?: list<Asset>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
