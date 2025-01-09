<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyRedshiftIdcApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RedshiftIdcApplicationArn
 * @property string $IdentityNamespace
 * @property string $IamRoleArn
 * @property string $IdcDisplayName
 * @property list<Shapes\AuthorizedTokenIssuer> $AuthorizedTokenIssuerList
 * @property list<Shapes\ServiceIntegrationsUnion> $ServiceIntegrations
 */
class ModifyRedshiftIdcApplicationRequest extends Request
{
    /**
     * @param array{
     *     RedshiftIdcApplicationArn: string,
     *     IdentityNamespace?: string,
     *     IamRoleArn?: string,
     *     IdcDisplayName?: string,
     *     AuthorizedTokenIssuerList?: list<Shapes\AuthorizedTokenIssuer>,
     *     ServiceIntegrations?: list<Shapes\ServiceIntegrationsUnion>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
