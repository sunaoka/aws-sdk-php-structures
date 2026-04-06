<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateRedshiftIdcApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdcInstanceArn
 * @property string $RedshiftIdcApplicationName
 * @property string|null $IdentityNamespace
 * @property string $IdcDisplayName
 * @property string $IamRoleArn
 * @property list<Shapes\AuthorizedTokenIssuer>|null $AuthorizedTokenIssuerList
 * @property list<Shapes\ServiceIntegrationsUnion>|null $ServiceIntegrations
 * @property 'None'|'Lakehouse'|null $ApplicationType
 * @property list<Shapes\Tag>|null $Tags
 * @property list<string>|null $SsoTagKeys
 */
class CreateRedshiftIdcApplicationRequest extends Request
{
    /**
     * @param array{
     *     IdcInstanceArn: string,
     *     RedshiftIdcApplicationName: string,
     *     IdentityNamespace?: string|null,
     *     IdcDisplayName: string,
     *     IamRoleArn: string,
     *     AuthorizedTokenIssuerList?: list<Shapes\AuthorizedTokenIssuer>|null,
     *     ServiceIntegrations?: list<Shapes\ServiceIntegrationsUnion>|null,
     *     ApplicationType?: 'None'|'Lakehouse'|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     SsoTagKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
