<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 */
class DescribeLakeFormationIdentityCenterConfigurationRequest extends Request
{
    /**
     * @param array{CatalogId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
