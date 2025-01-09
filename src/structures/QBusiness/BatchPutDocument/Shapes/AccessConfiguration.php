<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AccessControl> $accessControls
 * @property 'AND'|'OR' $memberRelation
 */
class AccessConfiguration extends Shape
{
    /**
     * @param array{
     *     accessControls: list<AccessControl>,
     *     memberRelation?: 'AND'|'OR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
