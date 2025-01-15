<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Principal> $principals
 * @property 'AND'|'OR'|null $memberRelation
 */
class AccessControl extends Shape
{
    /**
     * @param array{
     *     principals: list<Principal>,
     *     memberRelation?: 'AND'|'OR'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
