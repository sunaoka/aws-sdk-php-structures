<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $LocalMountPath
 */
class FileSystemConfig extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     LocalMountPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
