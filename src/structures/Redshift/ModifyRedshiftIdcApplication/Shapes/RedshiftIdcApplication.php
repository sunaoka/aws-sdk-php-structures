<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyRedshiftIdcApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IdcInstanceArn
 * @property string|null $RedshiftIdcApplicationName
 * @property string|null $RedshiftIdcApplicationArn
 * @property string|null $IdentityNamespace
 * @property string|null $IdcDisplayName
 * @property string|null $IamRoleArn
 * @property string|null $IdcManagedApplicationArn
 * @property string|null $IdcOnboardStatus
 * @property list<AuthorizedTokenIssuer>|null $AuthorizedTokenIssuerList
 * @property list<ServiceIntegrationsUnion>|null $ServiceIntegrations
 */
class RedshiftIdcApplication extends Shape
{
    /**
     * @param array{
     *     IdcInstanceArn?: string|null,
     *     RedshiftIdcApplicationName?: string|null,
     *     RedshiftIdcApplicationArn?: string|null,
     *     IdentityNamespace?: string|null,
     *     IdcDisplayName?: string|null,
     *     IamRoleArn?: string|null,
     *     IdcManagedApplicationArn?: string|null,
     *     IdcOnboardStatus?: string|null,
     *     AuthorizedTokenIssuerList?: list<AuthorizedTokenIssuer>|null,
     *     ServiceIntegrations?: list<ServiceIntegrationsUnion>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
