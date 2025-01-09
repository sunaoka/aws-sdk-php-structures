<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Bucket
 * @property string $s3Key
 * @property string $etag
 * @property 'X86_64'|'ARM64'|'ARMHF' $architecture
 */
class Source extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string,
     *     s3Key?: string,
     *     etag?: string,
     *     architecture?: 'X86_64'|'ARM64'|'ARMHF'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
