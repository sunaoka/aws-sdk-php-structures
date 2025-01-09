<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceVolume
 * @property string $ContainerPath
 */
class AwsMountPoint extends Shape
{
    /**
     * @param array{
     *     SourceVolume?: string,
     *     ContainerPath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
