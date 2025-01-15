<?php

namespace Sunaoka\Aws\Structures\Pipes\UpdatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property 'N_TO_N'|'SEQUENTIAL'|null $Type
 */
class BatchJobDependency extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     Type?: 'N_TO_N'|'SEQUENTIAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
