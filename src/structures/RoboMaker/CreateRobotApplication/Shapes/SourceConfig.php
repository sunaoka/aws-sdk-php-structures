<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateRobotApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Bucket
 * @property string|null $s3Key
 * @property 'X86_64'|'ARM64'|'ARMHF'|null $architecture
 */
class SourceConfig extends Shape
{
    /**
     * @param array{
     *     s3Bucket?: string|null,
     *     s3Key?: string|null,
     *     architecture?: 'X86_64'|'ARM64'|'ARMHF'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
