<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LakeFormationScopeUnion>|null $LakeFormation
 * @property list<S3AccessGrantsScopeUnion>|null $S3AccessGrants
 */
class ServiceIntegrationsUnion extends Shape
{
    /**
     * @param array{
     *     LakeFormation?: list<LakeFormationScopeUnion>|null,
     *     S3AccessGrants?: list<S3AccessGrantsScopeUnion>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
