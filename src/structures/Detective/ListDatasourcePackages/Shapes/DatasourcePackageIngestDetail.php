<?php

namespace Sunaoka\Aws\Structures\Detective\ListDatasourcePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STARTED'|'STOPPED'|'DISABLED' $DatasourcePackageIngestState
 * @property array<'STARTED'|'STOPPED'|'DISABLED', TimestampForCollection> $LastIngestStateChange
 */
class DatasourcePackageIngestDetail extends Shape
{
    /**
     * @param array{
     *     DatasourcePackageIngestState?: 'STARTED'|'STOPPED'|'DISABLED',
     *     LastIngestStateChange?: array<'STARTED'|'STOPPED'|'DISABLED', TimestampForCollection>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
