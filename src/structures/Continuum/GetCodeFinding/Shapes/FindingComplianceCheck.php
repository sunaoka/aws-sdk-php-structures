<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uid
 * @property string|null $name
 * @property string|null $description
 */
class FindingComplianceCheck extends Shape
{
    /**
     * @param array{
     *     uid?: string|null,
     *     name?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
