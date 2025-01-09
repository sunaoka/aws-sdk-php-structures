<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 */
class DeleteLakeFormationIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{CatalogId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
