<?php

namespace Sunaoka\Aws\Structures\LakeFormation\PutDataLakeSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property Shapes\DataLakeSettings $DataLakeSettings
 */
class PutDataLakeSettingsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DataLakeSettings: Shapes\DataLakeSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
