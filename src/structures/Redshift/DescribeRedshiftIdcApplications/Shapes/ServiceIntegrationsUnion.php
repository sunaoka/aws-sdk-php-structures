<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeRedshiftIdcApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LakeFormationScopeUnion> $LakeFormation
 * @property list<S3AccessGrantsScopeUnion> $S3AccessGrants
 */
class ServiceIntegrationsUnion extends Shape
{
    /**
     * @param array{
     *     LakeFormation?: list<LakeFormationScopeUnion>,
     *     S3AccessGrants?: list<S3AccessGrantsScopeUnion>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
