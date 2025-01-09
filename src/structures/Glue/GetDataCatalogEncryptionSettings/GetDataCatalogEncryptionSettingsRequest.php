<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataCatalogEncryptionSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 */
class GetDataCatalogEncryptionSettingsRequest extends Request
{
    /**
     * @param array{CatalogId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
