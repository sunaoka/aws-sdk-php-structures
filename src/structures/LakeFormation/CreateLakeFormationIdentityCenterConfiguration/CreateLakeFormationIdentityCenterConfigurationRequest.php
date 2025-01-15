<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string|null $InstanceArn
 * @property Shapes\ExternalFilteringConfiguration|null $ExternalFiltering
 * @property list<Shapes\DataLakePrincipal>|null $ShareRecipients
 */
class CreateLakeFormationIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     InstanceArn?: string|null,
     *     ExternalFiltering?: Shapes\ExternalFilteringConfiguration|null,
     *     ShareRecipients?: list<Shapes\DataLakePrincipal>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
