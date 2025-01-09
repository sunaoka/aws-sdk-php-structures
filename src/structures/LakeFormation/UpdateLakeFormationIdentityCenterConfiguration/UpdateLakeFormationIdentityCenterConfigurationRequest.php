<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property list<Shapes\DataLakePrincipal> $ShareRecipients
 * @property 'ENABLED'|'DISABLED' $ApplicationStatus
 * @property Shapes\ExternalFilteringConfiguration $ExternalFiltering
 */
class UpdateLakeFormationIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     ShareRecipients?: list<Shapes\DataLakePrincipal>,
     *     ApplicationStatus?: 'ENABLED'|'DISABLED',
     *     ExternalFiltering?: Shapes\ExternalFilteringConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
