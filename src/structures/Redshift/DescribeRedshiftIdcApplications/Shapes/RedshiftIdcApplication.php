<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeRedshiftIdcApplications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdcInstanceArn
 * @property string $RedshiftIdcApplicationName
 * @property string $RedshiftIdcApplicationArn
 * @property string $IdentityNamespace
 * @property string $IdcDisplayName
 * @property string $IamRoleArn
 * @property string $IdcManagedApplicationArn
 * @property string $IdcOnboardStatus
 * @property list<AuthorizedTokenIssuer> $AuthorizedTokenIssuerList
 * @property list<ServiceIntegrationsUnion> $ServiceIntegrations
 */
class RedshiftIdcApplication extends Shape
{
    /**
     * @param array{
     *     IdcInstanceArn?: string,
     *     RedshiftIdcApplicationName?: string,
     *     RedshiftIdcApplicationArn?: string,
     *     IdentityNamespace?: string,
     *     IdcDisplayName?: string,
     *     IamRoleArn?: string,
     *     IdcManagedApplicationArn?: string,
     *     IdcOnboardStatus?: string,
     *     AuthorizedTokenIssuerList?: list<AuthorizedTokenIssuer>,
     *     ServiceIntegrations?: list<ServiceIntegrationsUnion>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
