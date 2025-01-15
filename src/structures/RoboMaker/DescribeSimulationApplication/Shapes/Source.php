<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Bucket
 * @property string|null $s3Key
 * @property string|null $etag
 * @property 'X86_64'|'ARM64'|'ARMHF'|null $architecture
 */
class Source extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string|null,
     *     s3Key?: string|null,
     *     etag?: string|null,
     *     architecture?: 'X86_64'|'ARM64'|'ARMHF'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
