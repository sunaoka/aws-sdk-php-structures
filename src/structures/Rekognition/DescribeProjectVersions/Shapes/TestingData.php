<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeProjectVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Asset>|null $Assets
 * @property bool|null $AutoCreate
 */
class TestingData extends Shape
{
    /**
     * @param array{
     *     Assets?: list<Asset>|null,
     *     AutoCreate?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
