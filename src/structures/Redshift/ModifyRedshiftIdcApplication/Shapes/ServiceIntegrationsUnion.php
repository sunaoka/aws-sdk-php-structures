<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LakeFormationScopeUnion>|null $LakeFormation
 */
class ServiceIntegrationsUnion extends Shape
{
    /**
     * @param array{LakeFormation?: list<LakeFormationScopeUnion>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
