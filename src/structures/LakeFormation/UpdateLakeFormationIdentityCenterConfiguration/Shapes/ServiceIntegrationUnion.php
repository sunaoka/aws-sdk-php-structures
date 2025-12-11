<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLakeFormationIdentityCenterConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RedshiftScopeUnion>|null $Redshift
 */
class ServiceIntegrationUnion extends Shape
{
    /**
     * @param array{Redshift?: list<RedshiftScopeUnion>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
