<?php

namespace Sunaoka\Aws\Structures\Detective\ListDatasourcePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTED'|'STOPPED'|'DISABLED'|null $DatasourcePackageIngestState
 * @property array<'STARTED'|'STOPPED'|'DISABLED', TimestampForCollection>|null $LastIngestStateChange
 */
class DatasourcePackageIngestDetail extends Shape
{
    /**
     * @param array{
     *     DatasourcePackageIngestState?: 'STARTED'|'STOPPED'|'DISABLED'|null,
     *     LastIngestStateChange?: array<'STARTED'|'STOPPED'|'DISABLED', TimestampForCollection>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
