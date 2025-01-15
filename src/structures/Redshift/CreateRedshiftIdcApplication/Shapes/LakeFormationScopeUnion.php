<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LakeFormationQuery|null $LakeFormationQuery
 */
class LakeFormationScopeUnion extends Shape
{
    /**
     * @param array{LakeFormationQuery?: LakeFormationQuery|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
