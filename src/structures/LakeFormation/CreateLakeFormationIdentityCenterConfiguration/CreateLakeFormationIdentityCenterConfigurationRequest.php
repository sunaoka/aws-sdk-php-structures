<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $InstanceArn
 * @property Shapes\ExternalFilteringConfiguration $ExternalFiltering
 * @property list<Shapes\DataLakePrincipal> $ShareRecipients
 */
class CreateLakeFormationIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     InstanceArn?: string,
     *     ExternalFiltering?: Shapes\ExternalFilteringConfiguration,
     *     ShareRecipients?: list<Shapes\DataLakePrincipal>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
