<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetDataLakeSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 */
class GetDataLakeSettingsRequest extends Request
{
    /**
     * @param array{CatalogId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
