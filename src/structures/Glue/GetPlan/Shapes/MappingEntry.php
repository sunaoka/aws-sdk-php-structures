<?php

namespace Sunaoka\Aws\Structures\Glue\GetPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceTable
 * @property string|null $SourcePath
 * @property string|null $SourceType
 * @property string|null $TargetTable
 * @property string|null $TargetPath
 * @property string|null $TargetType
 */
class MappingEntry extends Shape
{
    /**
     * @param array{
     *     SourceTable?: string|null,
     *     SourcePath?: string|null,
     *     SourceType?: string|null,
     *     TargetTable?: string|null,
     *     TargetPath?: string|null,
     *     TargetType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
