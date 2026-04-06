<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'windows'|'posix' $sourcePathFormat
 * @property string $sourcePath
 * @property string $destinationPath
 */
class PathMappingRule extends Shape
{
    /**
     * @param array{
     *     sourcePathFormat: 'windows'|'posix',
     *     sourcePath: string,
     *     destinationPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
