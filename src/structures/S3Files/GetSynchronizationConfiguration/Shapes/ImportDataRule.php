<?php

namespace Sunaoka\Aws\Structures\S3Files\GetSynchronizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $prefix
 * @property 'ON_DIRECTORY_FIRST_ACCESS'|'ON_FILE_ACCESS' $trigger
 * @property int<0, 52673613135872> $sizeLessThan
 */
class ImportDataRule extends Shape
{
    /**
     * @param array{
     *     prefix: string,
     *     trigger: 'ON_DIRECTORY_FIRST_ACCESS'|'ON_FILE_ACCESS',
     *     sizeLessThan: int<0, 52673613135872>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
