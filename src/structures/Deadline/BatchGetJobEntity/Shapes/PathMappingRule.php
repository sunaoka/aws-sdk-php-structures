<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $destinationPath
 * @property string $sourcePath
 * @property 'windows'|'posix' $sourcePathFormat
 */
class PathMappingRule extends Shape
{
    /**
     * @param array{
     *     destinationPath: string,
     *     sourcePath: string,
     *     sourcePathFormat: 'windows'|'posix'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
