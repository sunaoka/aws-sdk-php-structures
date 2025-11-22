<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property list<Shapes\DataLakePrincipal>|null $ShareRecipients
 * @property list<Shapes\ServiceIntegrationUnion>|null $ServiceIntegrations
 * @property 'ENABLED'|'DISABLED'|null $ApplicationStatus
 * @property Shapes\ExternalFilteringConfiguration|null $ExternalFiltering
 */
class UpdateLakeFormationIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     ShareRecipients?: list<Shapes\DataLakePrincipal>|null,
     *     ServiceIntegrations?: list<Shapes\ServiceIntegrationUnion>|null,
     *     ApplicationStatus?: 'ENABLED'|'DISABLED'|null,
     *     ExternalFiltering?: Shapes\ExternalFilteringConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
