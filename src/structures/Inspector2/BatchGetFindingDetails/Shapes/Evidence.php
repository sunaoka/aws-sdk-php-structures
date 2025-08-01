<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetFindingDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $evidenceRule
 * @property string|null $evidenceDetail
 * @property string|null $severity
 */
class Evidence extends Shape
{
    /**
     * @param array{
     *     evidenceRule?: string|null,
     *     evidenceDetail?: string|null,
     *     severity?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
