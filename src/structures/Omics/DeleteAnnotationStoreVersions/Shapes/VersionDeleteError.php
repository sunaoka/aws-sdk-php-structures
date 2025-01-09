<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteAnnotationStoreVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $versionName
 * @property string $message
 */
class VersionDeleteError extends Shape
{
    /**
     * @param array{
     *     versionName: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
