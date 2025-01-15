<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogEncryptionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 */
class GetDataCatalogEncryptionSettingsRequest extends Request
{
    /**
     * @param array{CatalogId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
