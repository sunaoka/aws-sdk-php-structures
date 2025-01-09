<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileSystemPolicy
 */
class EfsFileSystemConfiguration extends Shape
{
    /**
     * @param array{fileSystemPolicy?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
