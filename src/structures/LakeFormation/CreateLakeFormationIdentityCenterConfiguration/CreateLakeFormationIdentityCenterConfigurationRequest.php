<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string|null $InstanceArn
 * @property Shapes\ExternalFilteringConfiguration|null $ExternalFiltering
 * @property list<Shapes\DataLakePrincipal>|null $ShareRecipients
 * @property list<Shapes\ServiceIntegrationUnion>|null $ServiceIntegrations
 */
class CreateLakeFormationIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     InstanceArn?: string|null,
     *     ExternalFiltering?: Shapes\ExternalFilteringConfiguration|null,
     *     ShareRecipients?: list<Shapes\DataLakePrincipal>|null,
     *     ServiceIntegrations?: list<Shapes\ServiceIntegrationUnion>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
