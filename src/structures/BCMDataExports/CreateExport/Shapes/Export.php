<?php

namespace Sunaoka\Aws\Structures\BCMDataExports\CreateExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExportArn
 * @property string $Name
 * @property string|null $Description
 * @property DataQuery $DataQuery
 * @property DestinationConfigurations $DestinationConfigurations
 * @property RefreshCadence $RefreshCadence
 */
class Export extends Shape
{
    /**
     * @param array{
     *     ExportArn?: string|null,
     *     Name: string,
     *     Description?: string|null,
     *     DataQuery: DataQuery,
     *     DestinationConfigurations: DestinationConfigurations,
     *     RefreshCadence: RefreshCadence
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
