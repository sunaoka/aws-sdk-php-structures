<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uid
 * @property string|null $name
 * @property string|null $type
 * @property string|null $region
 */
class FindingResource extends Shape
{
    /**
     * @param array{
     *     uid?: string|null,
     *     name?: string|null,
     *     type?: string|null,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
