<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Asset> $Assets
 * @property bool $AutoCreate
 */
class TestingData extends Shape
{
    /**
     * @param array{
     *     Assets?: list<Asset>,
     *     AutoCreate?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
