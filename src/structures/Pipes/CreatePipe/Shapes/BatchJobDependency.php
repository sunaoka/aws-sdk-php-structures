<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property 'N_TO_N'|'SEQUENTIAL' $Type
 */
class BatchJobDependency extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     Type?: 'N_TO_N'|'SEQUENTIAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
