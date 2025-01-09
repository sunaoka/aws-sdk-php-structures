<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Bucket
 * @property string $s3Key
 * @property 'X86_64'|'ARM64'|'ARMHF' $architecture
 */
class SourceConfig extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string,
     *     s3Key?: string,
     *     architecture?: 'X86_64'|'ARM64'|'ARMHF'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
