<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\CreateExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataQuery $DataQuery
 * @property string|null $Description
 * @property DestinationConfigurations $DestinationConfigurations
 * @property string|null $ExportArn
 * @property string $Name
 * @property RefreshCadence $RefreshCadence
 */
class Export extends Shape
{
    /**
     * @param array{
     *     DataQuery: DataQuery,
     *     Description?: string|null,
     *     DestinationConfigurations: DestinationConfigurations,
     *     ExportArn?: string|null,
     *     Name: string,
     *     RefreshCadence: RefreshCadence
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
