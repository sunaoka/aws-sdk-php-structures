<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogExportConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED'|'DISABLED' $ExportSetting
 * @property Shapes\ExportEncryptionConfiguration|null $EncryptionConfiguration
 * @property string|null $ClientToken
 */
class PutDataCatalogExportConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ExportSetting: 'ENABLED'|'DISABLED',
     *     EncryptionConfiguration?: Shapes\ExportEncryptionConfiguration|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
