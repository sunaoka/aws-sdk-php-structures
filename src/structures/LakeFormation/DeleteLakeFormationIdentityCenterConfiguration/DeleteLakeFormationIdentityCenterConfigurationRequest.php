<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 */
class DeleteLakeFormationIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{CatalogId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
