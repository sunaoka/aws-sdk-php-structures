<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $LocalMountPath
 * @property S3FilesConfig|null $S3FilesConfig
 */
class FileSystemConfig extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     LocalMountPath: string,
     *     S3FilesConfig?: S3FilesConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
