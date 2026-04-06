<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeRedshiftIdcApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LakeFormationScopeUnion>|null $LakeFormation
 * @property list<S3AccessGrantsScopeUnion>|null $S3AccessGrants
 * @property list<RedshiftScopeUnion>|null $Redshift
 */
class ServiceIntegrationsUnion extends Shape
{
    /**
     * @param array{
     *     LakeFormation?: list<LakeFormationScopeUnion>|null,
     *     S3AccessGrants?: list<S3AccessGrantsScopeUnion>|null,
     *     Redshift?: list<RedshiftScopeUnion>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
