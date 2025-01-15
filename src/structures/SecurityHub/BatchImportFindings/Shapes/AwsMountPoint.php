<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceVolume
 * @property string|null $ContainerPath
 */
class AwsMountPoint extends Shape
{
    /**
     * @param array{
     *     SourceVolume?: string|null,
     *     ContainerPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
