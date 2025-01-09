<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\UpdateExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataQuery $DataQuery
 * @property string $Description
 * @property DestinationConfigurations $DestinationConfigurations
 * @property string $ExportArn
 * @property string $Name
 * @property RefreshCadence $RefreshCadence
 */
class Export extends Shape
{
    /**
     * @param array{
     *     DataQuery: DataQuery,
     *     Description?: string,
     *     DestinationConfigurations: DestinationConfigurations,
     *     ExportArn?: string,
     *     Name: string,
     *     RefreshCadence: RefreshCadence
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
