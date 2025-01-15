<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyRedshiftIdcApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RedshiftIdcApplicationArn
 * @property string|null $IdentityNamespace
 * @property string|null $IamRoleArn
 * @property string|null $IdcDisplayName
 * @property list<Shapes\AuthorizedTokenIssuer>|null $AuthorizedTokenIssuerList
 * @property list<Shapes\ServiceIntegrationsUnion>|null $ServiceIntegrations
 */
class ModifyRedshiftIdcApplicationRequest extends Request
{
    /**
     * @param array{
     *     RedshiftIdcApplicationArn: string,
     *     IdentityNamespace?: string|null,
     *     IamRoleArn?: string|null,
     *     IdcDisplayName?: string|null,
     *     AuthorizedTokenIssuerList?: list<Shapes\AuthorizedTokenIssuer>|null,
     *     ServiceIntegrations?: list<Shapes\ServiceIntegrationsUnion>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
