<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Principal> $principals
 * @property 'AND'|'OR' $memberRelation
 */
class AccessControl extends Shape
{
    /**
     * @param array{
     *     principals: list<Principal>,
     *     memberRelation?: 'AND'|'OR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
