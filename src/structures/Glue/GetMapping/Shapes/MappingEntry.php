<?php

namespace Sunaoka\Aws\Structures\Glue\GetMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceTable
 * @property string $SourcePath
 * @property string $SourceType
 * @property string $TargetTable
 * @property string $TargetPath
 * @property string $TargetType
 */
class MappingEntry extends Shape
{
    /**
     * @param array{
     *     SourceTable?: string,
     *     SourcePath?: string,
     *     SourceType?: string,
     *     TargetTable?: string,
     *     TargetPath?: string,
     *     TargetType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
