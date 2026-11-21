<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataCatalogExportConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\S3TablesConfiguration|null $S3TablesConfiguration
 * @property Shapes\AssetsExport|null $Assets
 */
class PutDataCatalogExportConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     S3TablesConfiguration?: Shapes\S3TablesConfiguration|null,
     *     Assets?: Shapes\AssetsExport|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
