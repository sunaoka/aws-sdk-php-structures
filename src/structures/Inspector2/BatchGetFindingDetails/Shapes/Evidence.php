<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evidenceDetail
 * @property string $evidenceRule
 * @property string $severity
 */
class Evidence extends Shape
{
    /**
     * @param array{
     *     evidenceDetail?: string,
     *     evidenceRule?: string,
     *     severity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
